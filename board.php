<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>WowKou-board</title>
		<link rel="stylesheet" type="text/css"  href="css/style.css">
		
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
				<li>
					<a href="search.php">搜尋</a>
				</li>
				<li>
					<a href="rank.php">排行</a>
				</li>
				<li class="current">
					<a href="board.php">留言板</a>
				</li>
				<li>
					<a href="http://tv.itver.cc/hbo/">線上看按此</a>
				</li>
			</ul>
				</div>
				<div id="body">
					<div>
						<br><br><br><?php include("board_show.php"); ?><br><br><br>
					</div>
					<div>
						<form action="boardpost.php">
							<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">我要留言</button>
						</form>
					</div>
					
					<div id="footer">
						<p>&copy; 2015  | Only For Education</p>
					</div>
				</div>
			</body>
		</html>