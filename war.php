<?php 
	// 連線資料庫, 自己弄 
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'movie';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) ;//連接資料庫
    mysql_query("SET NAMES 'utf8'");//設定語系
    mysql_select_db($dbname);

 	for ($i=0; $i < 8; $i++) { 
		$today = getdate();
	    date("Y/m/d H:i");  //日期格式化
	    $year=$today["year"]; //年 
	    $month=$today["mon"]; //月
	    $day=$today["mday"]+$i;  //日
	 
	    if(strlen($month)=='1')$month='0'.$month;
	    if(strlen($day)=='1')$day='0'.$day;
	    $todaydb ="t".$year.$month.$day;
	    echo "<h2><strong>".$month."/".$day."</strong></h2>";
	    	 
	    #$sql = "select * from $todaydb";//查詢整個表單
    	# code...   
	  	$sqls = "SELECT * FROM $todaydb where type = '戰爭災難'"; 
		$result = mysql_query($sqls);				 
		while ( $row = mysql_fetch_array($result)) { 
			echo $row['movie_channel']."&nbsp;&nbsp;";
	        echo $row['movie_time']."&nbsp;&nbsp";
	        echo $row['movie_nameCH']."    <br>";
		} 

    }
?>