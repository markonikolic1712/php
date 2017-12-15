<?php

$w = 30;
$x = 7;
$z = 0;
$vel =1;
$gameRunning = true;


while($gameRunning) {
	$x = $x + $vel;
	if($x>=30 || $x<=0){
		$vel*=-1;
	}
	for($i=0;$i<31;$i++){
		echo $i==$x ? "#" : " ";
		}
	usleep(200000);
	//echo "\r";
	$z++;
	if ($z>10){
		break;
	}
}