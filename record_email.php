<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>WowKou-Record_email</title>
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
		</div>
		<div id="body">
			<div class="body">
				<?php
					session_start();				 

					$selected=$_POST['email'];
					$poname=$_SESSION['mname'];
					$potype=$_SESSION['mtype'];
					$podate=$_SESSION['mdate'];
					$potime=$_SESSION['mtime'];
					$pochannel=$_SESSION['mchannel'];
					$get_tmp = $_SESSION['tmp'];
					$today = getdate();
					date("Y/m/d H:i");  //日期格式化

					if($selected != ""){
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
				    	$tdb = "send_emil";
				    	mysql_query("INSERT INTO ".$tdb."(e_mail, name, type, date, time, channel) VALUES ('$selected', '$poname', '$potype', '$podate','$potime', '$pochannel')");
				
						echo "<hr><h1>預約成功！您將在預約日前天及當天收到來信提醒！</h1><br>
								<input type='button' value='關閉視窗'' onclick='self.close()'>
								<br><br>";
					}else{
						echo "<hr><h1>預約失敗！您的e-mail未正確填寫！</h1><br>
								<input type='button' value='關閉視窗'' onclick='self.close()'>
								<br><br>";
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