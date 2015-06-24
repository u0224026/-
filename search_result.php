<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>WowKou-Search_result</title>
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
					<a href="board.html">留言板</a>
					<ul>
						<li>
							<a href="article.html">Article</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="contact.html">網站地圖</a>
				</li>
			</ul>
		</div>
		<div id="body">
			<div id="content">
				<h1>MOvie Channel Movie show</h1>
				<div>
                	<a href="search.php">
                	<button><h1>電影日期查詢</h1></button>
               	</a>                </div>
                <div id="TabbedPanels1" class="TabbedPanels">
                  		<ul class="TabbedPanelsTabGroup">
                        	<li class=TabbedPanelsTab tabindex=0>喜劇</li> 
                            <li class=TabbedPanelsTab tabindex=0>劇情</li>
                            <li class=TabbedPanelsTab tabindex=0>動畫</li> 
                            <li class=TabbedPanelsTab tabindex=0>動作冒險</li>
                            <li class=TabbedPanelsTab tabindex=0>歷史傳記</li> 
                            <li class=TabbedPanelsTab tabindex=0>靈異驚悚</li>  
                            <li class=TabbedPanelsTab tabindex=0>歌舞音樂</li>
                            <li class=TabbedPanelsTab tabindex=0>戰爭災難</li>
                            <li class=TabbedPanelsTab tabindex=0>懸疑推理</li>
                            <li class=TabbedPanelsTab tabindex=0>其他</li>   
			      		</ul>
				  		<div class="TabbedPanelsContentGroup">
				    		<div class="TabbedPanelsContent"><?php include("com.php"); ?></div>
				    		<div class="TabbedPanelsContent"><?php include("story.php"); ?></div>
                    		<div class="TabbedPanelsContent"><?php include("animate.php"); ?></div>
				    		<div class="TabbedPanelsContent"><?php include("action.php"); ?></div>
                     		<div class="TabbedPanelsContent"><?php include("history.php"); ?></div>
				    		<div class="TabbedPanelsContent"><?php include("horror.php"); ?></div>
                    		<div class="TabbedPanelsContent"><?php include("music.php"); ?></div>
                            <div class="TabbedPanelsContent"><?php include("war.php"); ?></div>
				    		<div class="TabbedPanelsContent"><?php include("detactive.php"); ?></div>
                            <div class="TabbedPanelsContent"><?php include("other.php"); ?></div>
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