<?php
$sub_x 		= rand(200,300);
$sub_y		= rand(200,300);
$sub_w		= rand(50,100);
$sub_h		= rand(50,100);

$proj_x		= rand(200,300);
$proj_y		= rand(200,300);

$sub_color	= 'green';
$proj_color	= 'blue';

$isHit = ($proj_x+2) > $sub_x && ($proj_x+2) < $sub_x + $sub_w && ($proj_y+2) > $sub_y && ($proj_y+2) < $sub_y + $sub_h;

if($isHit){
	$proj_color 	= 'purple';
	$sub_color	= 'red';
}

echo "<div style='width:".$sub_w."px;height:".$sub_h."px;position:absolute;top:".$sub_y."px;left:".$sub_x."px;background-color:".$sub_color.";'></div>";
echo "<div style='width:5px;height:5px;background-color:".$proj_color.";position:absolute;left:".($proj_x+2)."px;top:".($proj_y-2)."px;'></div>";

