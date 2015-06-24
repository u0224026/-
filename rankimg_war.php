<?php	
					include("connect.php");
					// $type=array("喜劇","劇情","動畫","動作冒險","歷史傳記","靈異驚悚","歌舞音樂","戰爭災難","懸疑推理","其他");
					
					// // $sql = "select * from counthit where type='喜劇'"; //查詢
					// // mysql_query($sql) ;

					
					// for($j=0 ; $j<count($type) ; $j++){
					// 	//ASC小到大, DESC大到小
					// 	$sql = "select * from counthit where type='".$type[$j]."' ORDER BY hit DESC"; //針對不同類別做查詢，並以"hit"做遞減排序
					// 	$result = mysql_query($sql) ;
					$a[] =5;
					$b[] =5;
					$c[] =5;

						
					// };
					$sql = "select * from counthit where type='戰爭災難' ORDER BY hit DESC"; //針對不同類別做查詢，並以"hit"做遞減排序
					$result = mysql_query($sql) ;

					for($i=0 ; $i<5 ; $i++){//印出資料
							$row = mysql_fetch_array($result);
							$a[$i] = $row[1];	// 電影名稱
							$b[$i] =  $row[2];	//類型
							$c[$i] = $row[3];	//次數								
					};

					for($i=0 ; $i<5 ; $i++){//印出資料
						// $row = mysql_fetch_array($result);	
						

						require_once ('jpgraph\jpgraph.php');
						require_once ('jpgraph\jpgraph_bar.php');

						//$datay=array(62,105,85,50);


						// Create the graph. These two calls are always required
						$graph = new Graph(600,200,'auto');
						$graph->SetScale("textlin");

						//$theme_class="DefaultTheme";
						//$graph->SetTheme(new $theme_class());

						// set major and minor tick positions manually
						$max = $c[0]-($c[0]%10)+10;
						$cen = $max/5;
						$graph->yaxis->SetTickPositions(array(0,$cen,$cen*2,$cen*3,$cen*4,$max), array(15,45,75,105,135));
						$graph->SetBox(false);
							
						//$graph->ygrid->SetColor('gray');
						$graph->ygrid->SetFill(false);
						$graph->xaxis->SetFont(FF_CHINESE, FS_NORMAL); 
						//$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD,14);
						$graph->xaxis->SetTickLabels($a);	//x軸名稱


						$graph->yaxis->HideLine(false);
						$graph->yaxis->HideTicks(false,true);

						// Create the bar plots
						$b1plot = new BarPlot($c);	//產生長條圖，(值)

						
						//$b1plot->value->SetFormatCallback(“cbFmtPercentage”);//设置数据显示格式  
						
						$graph->Add($b1plot);
						$b1plot->value->Show();//让具体数据在顶端显示出来 
						$b1plot->value->SetFormat('%d'); //格式設定


						$b1plot->SetColor("white");
						$b1plot->SetFillGradient("#880000","white",GRAD_LEFT_REFLECTION);
						$b1plot->SetWidth(30);
						//$b1plot->value->SetColor("black","darkred"); 	//顏色
						$graph->title->SetFont(FF_CHINESE,FS_NORMAL,14);//设置标题字体样式以及大小
						$graph->title->Set("戰爭災難類 暢銷排行前五名");
						//$graph->tilte->SetFont(FF_CHINESE, FS_NORMAL); 

						// Display the graph
						 $graph->Stroke();

					};

?>