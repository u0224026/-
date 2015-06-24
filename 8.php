<?php
    $today = getdate();
    date("Y/m/d H:i");  //日期格式化
    $year=$today["year"]; //年 
    $month=$today["mon"]; //月
    $day=$today["mday"]+7;  //日
 
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
    echo "<strong>HBO Channel in $today !!</strong>"."<br><br>";

   while($row = mysql_fetch_array($result)){//印出資料
        echo $row['movie_id']." .";
        echo $row['movie_channel']." &nbsp;&nbsp;";
        echo $row['movie_time']." &nbsp;&nbsp;";
        echo $row['movie_nameCH']."<br>";
        $in_one = $row['movie_nameCH'];
//寫入總點擊的資料表
        $sql_two = "SELECT * FROM counthit";//查詢整個表單
        $result_two = mysql_query($sql_two);       
        $countrecord = mysql_num_rows(mysql_query("SELECT * FROM counthit"))+1;
        $sql_three = " INSERT INTO counthit (id_count, name, hit) VALUES ($countrecord,'$in_one',0)";
        mysql_query($sql_three,$conn);
   }
//add
    echo "<br><hr>";
    echo " <div class = 'ctype'>";

    $sql = "select * from $todaydb";//查詢整個表單
    $result = mysql_query($sql) ;
            
    echo "<form action= 'look.php' method= 'post' target= '_blank'>";
        echo "<select name = 's_n'>";        
        $tmpcountt = 1;
       
        while($row = mysql_fetch_array($result)){//印出資料
            $count =  $month.$day.$row['movie_nameCH'];
            echo "<option value=".$count.">".$row['movie_nameCH']."</option>";
            $tmpcountt += 1;
            $count =  $month.$day.$row['movie_nameCH'];
        };
        echo "</select>
              <input type= 'submit'  value='查看詳情'>
          </form><br></div>";

?>