<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>WowKou-Comment</title>
		<link rel="stylesheet" href="css/style2.css" rel="stylesheet" media="screen">
		<!-- CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
		<!-- Custom styles CSS -->
		
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div id="body">
			<!-- Contact start -->
			<div class="container">
				<div class="row">
				<br><br><br><br>
					<div class="col-sm-6 col-sm-offset-3">
						<div>
							<h2>Comment</h2>
						</div>
					</div>
					</div><!-- .row -->
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<form id="contact-form" role="form" action='board.php' <?php $dbhost = 'localhost';
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
$sql_three = "INSERT INTO comment (title, name, messages) VALUES ('$title','$name','$messages')";
mysql_query($sql_three);?> method="post">
								<div class="ajax-hidden">
								<div class="form-group wow fadeInUp" data-wow-delay=".1s">
										<label class="sr-only">Title</label>
										<input name="Mytitle" class="form-control" type="text" placeholder=<?php $dbhost = 'localhost';
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
echo $title; ?>>
									</div>
									<div class="form-group wow fadeInUp">
										<label class="sr-only" >Name</label>
										<input type="text" class="form-control" name="MyName" placeholder=<?php $dbhost = 'localhost';
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
echo $name; ?>>
									</div>
									<div class="form-group wow fadeInUp" data-wow-delay=".2s">
										<textarea class="form-control" name="Mymessages" cols="30" rows="10" placeholder=<?php $dbhost = 'localhost';
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
echo $messages; ?>></textarea>
									</div>
									<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">留言確認</button>
								</div>
								<div class="ajax-response"></div>
							</form>
						</div>
						</div><!-- .row -->
						</div><!-- .container -->
					</body>'
