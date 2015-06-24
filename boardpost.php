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
							<form id="contact-form" role="form" action="board_check.php" method="post">
								<div class="ajax-hidden">
									<div class="form-group wow fadeInUp" data-wow-delay=".1s">
										<label class="sr-only">Title</label>
										<input name="Mytitle" class="form-control" type="text" placeholder="Title">
									</div>
									<div class="form-group wow fadeInUp">
										<label class="sr-only" >Name</label>
										<input type="text" class="form-control" name="MyName" placeholder="Name">
									</div>
									<div class="form-group wow fadeInUp" data-wow-delay=".2s">
										<textarea class="form-control" name="Mymessages" cols="30" rows="10" placeholder="Message"></textarea>
									</div>
									<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">留言完成</button>
								</div>
								<div class="ajax-response"></div>
							</form>
						</div>
						</div><!-- .row -->
						</div><!-- .container -->
					</body>