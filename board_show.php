<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    </head>
    <body>
        <?php  
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'movie';
        $conn = mysql_connect($dbhost, $dbuser, $dbpass) ;//連接資料庫
        mysql_select_db($dbname);
        mysql_query("SET NAMES 'utf8'");//設定語系
        $sql = "SELECT * FROM comment";
        $result = mysql_query($sql) ;
        while($row = mysql_fetch_array($result)){//印出資料
        $a=rand(0, 5);
        if ($a==0)
        {
        	$im='images\0.jpg';
        	# code...
        }
        else if ($a==1)
        {
        	$im='images\1.jpg';
        	# code...
        }
        else if ($a==2)
        {
        	$im='images\2.jpg';
        	# code...
        }
        else if ($a==3)
        {
        	$im='images\3.jpg';
        	# code...
        }
        else if ($a==4)
        {
        	$im='images\4.jpg';
        	# code...
        }
        else 
        {
        	$im='images\5.jpg';
        	# code...
        }






        echo'<div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src='.$im.'>
                    </a>
                    <div class="media-body">
                    <h4 class="media-heading">';
        echo $row['title'];
        echo '<small>';
        echo $row['name'];
        echo '</small>
                        </h4>';
        echo $row['messages'].'<br><br><br><br>';
        echo ' </div>
                </div>
';} ?>
    </body>
    </html>