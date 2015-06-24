<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>WowKou-Search_look</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	#apDiv1 {
	position: absolute;
	width: 860px;
	height: 115px;
	z-index: 1;
	visibility: visible;
}
    #apDiv2 {
	position: absolute;
	width: 860px;
	height: 115px;
	z-index: 2;
	visibility: hidden;
}
    </style>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<a href="index.html" id="logo"><img src="images/logo.png" alt="Logo"></a>
			<ul>
				<li>
					<a href="other.html">主頁</a>
				</li>
				<li>
					<a href="about.html">關於</a>
				</li>
				<li class="current">
					<a href="search.php">搜尋</a>
				</li>
				<li>
					<a href="rank.php">排行</a>
				</li>
				<li>
					<a href="board.html">留言板</a>
					<ul>
						<li>
							<a href="article.html">Article</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="contact.html">網站地圖</a>
				</li>
			</ul>
		</div>
		<div id="body">
			<div class="body">
				 <?php
				 session_start();				 

					$selected=$_POST['s_n'];
					$_SESSION['tmp'] = $selected;
					$today = getdate();
					date("Y/m/d H:i");  //日期格式化
										
					$dbhost = 'localhost';
					$dbuser = 'root';
					$dbpass = '';
					$dbname = 'movie';
					$conn = mysql_connect($dbhost, $dbuser, $dbpass) ;//連接資料庫
					mysql_query("SET NAMES 'utf8'");//設定語系
					mysql_select_db($dbname);
					$correct_day = substr($selected,0,4);
					$correct_val = substr($selected,4,-3);
					$year=$today["year"]; //年
					$month=$today["mon"]; //月
    				$day=$today["mday"];  //日

    				if(strlen($month)=='1')$month='0'.$month;
	    			if(strlen($day)=='1')$day='0'.$day;
	    			$todaydb ="t".$year.$correct_day;
	    			$ptoday = $month."/".$day;
	    			$tdb = "counthit";
	    			
	    			$sql = "SELECT * FROM ".$todaydb." WHERE movie_nameCH LIKE '$correct_val%'";
	    			mysql_query("set names 'utf8'");
					$result = mysql_query($sql) ;
					$tmp_end = 0;
					while($row = mysql_fetch_array($result)){//印出資料
						while($tmp_end<1){
							$sql_two = "SELECT * FROM ".$tdb." WHERE name LIKE '$correct_val%'";//查詢整個表單找到對應的電影名稱
							$result_two = mysql_query($sql_two);       
	      						while($row_two = mysql_fetch_array($result_two)){
	      							$addclick = $row_two['hit'];//先加點閱率
					        		$addclick += 1;
					        		mysql_query("UPDATE counthit SET hit = ".$addclick." WHERE name LIKE '$correct_val%'");
	        					};
							echo "<table><tr><td width = 1200em><h1><b>".$row['movie_nameCH']."</b></h1></td>
									  <td width = 200em>累計點閱率：".$addclick."</td>";
						//Form
								echo "<td width = 50em>
										<form action='search_email.php' method='post'>
											<input type='submit' value='加入通知'>
										</form>
									  </td>
								 </table>
								  	<div class='cone'>
								  	播放頻道：".$row['movie_channel']." <br>
								  	播放時間：".$row['date']."&nbsp;,&nbsp;".$row['movie_time']." <br>
				        			電影類型：".$row['type']." <br>
				        			導&nbsp;&nbsp;演：".$row['movie_director']." <br><hr>
				        			電影大綱：<br>".$row['movie_main']." </div><br><br>";
				        			$tmp_end +=1;	
			        	}				        	
			    	}									
				?>
			</div>
		
         
		</div>
        
		<div id="footer">
		  <p>&copy; 2015  | Only For Education</p>
		</div>
	</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    </script>
</body>
</html>