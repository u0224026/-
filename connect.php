<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'movie';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) ;//連接資料庫
mysql_query("SET NAMES 'utf8'");//設定語系
mysql_select_db($dbname);


?>