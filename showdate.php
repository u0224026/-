<?php
 	$today = getdate();
    date("Y/m/d H:i");  //日期格式化
    $year=$today["year"]; //年 
    $month=$today["mon"]; //月
    
    for ($i=0; $i < 7; $i++) { 
    	$day = $today["mday"]+$i;
    	if(strlen($month)=='1')$month='0'.$month;
    	if(strlen($day)=='1')$day='0'.$day;
    	$todays = $month."/".$day;
    	echo "<li class='TabbedPanelsTab' tabindex='0'>$todays</li>";
    };
?>