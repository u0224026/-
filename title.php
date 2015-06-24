<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'movie';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) ;//連接資料庫
$name=$_POST['MyName'];
$title=$_POST['Mytitle'];
$messages=$_POST['Mymessages'];
mysql_select_db($dbname);
mysql_query("SET NAMES 'utf8'");//設定語系
$sql = "SELECT * FROM comment";
$result = mysql_query($sql) ;
$row = mysql_fetch_array($result);
echo $row['title'];