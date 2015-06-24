<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>WowKou-Search_email</title>
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
		  <div id="content">
				<h1><font size = "40px" line-height= "40px">I want to ...</font></h1>
				<?php
				session_start();
				$get_tmp = $_SESSION['tmp'];

					$today = getdate();
					date("Y/m/d H:i");  //日期格式化
										
					$dbhost = 'localhost';
					$dbuser = 'root';
					$dbpass = '';
					$dbname = 'movie';
					$conn = mysql_connect($dbhost, $dbuser, $dbpass) ;//連接資料庫
					mysql_query("SET NAMES 'utf8'");//設定語系
					mysql_select_db($dbname);
					$correct_day = substr($get_tmp,0,4);
					$correct_val = substr($get_tmp,4,-3);
					
					$year=$today["year"]; //年
					$month=$today["mon"]; //月
    				$day=$today["mday"];  //日

    				if(strlen($month)=='1')$month='0'.$month;
	    			if(strlen($day)=='1')$day='0'.$day;
	    			$todaydb ="t".$year.$correct_day;
	    			$ptoday = $month."/".$day;
	    				
	    			$sql = "SELECT * FROM ".$todaydb." WHERE movie_nameCH LIKE '$correct_val%'";
	    			mysql_query("set names 'utf8'");
					$result = mysql_query($sql) ;
					$tmp_once = 0;
					while($row = mysql_fetch_array($result)){//印出資料
						while($tmp_once < 1){
						echo "<form action='record_email.php' method='post'>									
									<h1>
									親愛的用戶您好：<br>
									請輸入您的e-mail，我們將於影片播放前一天及當天寄信通知！
								</h1>
								<table>
									<tr>
										<td width = 5%><label name ='moviename'><h1><b>電影名稱：</b></h1></label></td>
										<td width = 100%><label><h1><i>".$row['movie_nameCH']."</i></h1></label></td>
									</tr>
									<tr>
										<td width = 5%><label name ='movietype'><h1><b>電影類型：</b></h1></label></td>
										<td width = 100%><label><h1><i>".$row['type']."</i></h1></label></td>
									</tr>
									<tr>
										<td><label for='movietime'><h1><b>開播時間：</b></h1></label></td>
										<td><label><h1><i>".$row['date']."&nbsp;,&nbsp;".$row['movie_time']."</i></h1></label></td>
									</tr>
									<tr>
										<td width = 5%><label name ='moviechannel'><h1><b>電影頻道：</b></h1></label></td>
										<td width = 100%><label><h1><i>".$row['movie_channel']."</i></h1></label></td>
									</tr>
									<tr>
										<td><label for='e_mail'><span><h1><b>您的E-mail：</b></h1></label></td>
										<td><input name ='email' type='text'></td>
									</tr>
								</table>
								<input type='submit' value='確認送出'>
							</form>";
							$_SESSION['mname'] = $row['movie_nameCH'];
							$_SESSION['mtype'] = $row['type'];
							$_SESSION['mdate'] = $row['date'];
							$_SESSION['mtime'] = $row['movie_time'];
							$_SESSION['mchannel'] = $row['movie_channel'];
							$tmp_once +=1 ;
						}																				        	
				    };								
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