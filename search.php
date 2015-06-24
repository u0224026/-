<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>WowKou-Search</title>
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
			<ul>
				<li>
					<a href="other.html">主頁</a>
				</li>
				<li>
					<a href="about.html">關於</a>
				</li>
				<li class="current">
					<a href="search.php">搜尋</a>
				</li>
				<li>
					<a href="rank.php">排行</a>
				</li>
				<li>
					<a href="board.php">留言板</a>
				</li>
				<li>
					<a href="http://tv.itver.cc/hbo/">線上看按此</a>
				</li>
			</ul>
		</div>
		<div id="body">
		  <div id="content">
				<h1>MOvie Channel Movie show</h1>
				<div>
                	<a href="search_result.php">
                	<button><h1>電影類型查詢</h1></button>
               		</a>
                </div>
            <div id="TabbedPanels1" class="TabbedPanels">
                  	<ul class="TabbedPanelsTabGroup">
                      	<?php include("showdate.php"); ?>
			      	</ul>
				  	<div class="TabbedPanelsContentGroup">
                    	<div class="TabbedPanelsContent"><?php include("1.php"); ?></div>
				    	<div class="TabbedPanelsContent"><?php include("2.php"); ?></div>
                    	<div class="TabbedPanelsContent"><?php include("3.php"); ?></div>
				    	<div class="TabbedPanelsContent"><?php include("4.php"); ?></div>
                    	<div class="TabbedPanelsContent"><?php include("5.php"); ?></div>
				    	<div class="TabbedPanelsContent"><?php include("6.php"); ?></div>
                    	<div class="TabbedPanelsContent"><?php include("7.php"); ?></div>
				    	<!--<div class="TabbedPanelsContent"><?php include("8.php"); ?></div>-->
				    </div>                    
		  	</div>
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