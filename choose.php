<?php
    $today = getdate();
    date("Y/m/d H:i");  //日期格式化
    $year=$today["year"]; //年 
    $month=$today["mon"]; //月
    $day=$today["mday"]+2;  //日
 
    if(strlen($month)=='1')$month='0'.$month;
    if(strlen($day)=='1')$day='0'.$day;
    $todaydb ="t".$year.$month.$day;
    $today = $month."/".$day;

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'movie';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) ;//連接資料庫
    mysql_query("SET NAMES 'utf8'");//設定語系
    mysql_select_db($dbname);
    $sql = "select * from $todaydb";//查詢整個表單
    $result = mysql_query($sql) ;
    $acttion = "look.php";
    $method = "post";
    $tar = "new";
    
    echo "<form action=".$acttion." method=".$method." target=".$tar.">";
                         
    echo "<select>";
    $count = 1;
    while($row = mysql_fetch_array($result)){//印出資料
        echo "<option value=".$count.">".$row['movie_nameCH']."</option>";
        $count += 1;
    }
    echo "</select>";
    $intype = "submit";
    echo "<input type=".$intype.">";
    echo "</form>";

?>