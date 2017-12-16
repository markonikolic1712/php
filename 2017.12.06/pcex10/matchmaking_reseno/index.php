<?php
require "init.php";
require "logic.php";

 
/*
for($j=0,$cc=count($gameVariableNames);$j<$cc;$j++){
	echo "Players in game {$gameVariableNames[$j]}<br>";
	$currentArr = &$$gameVariableNames[$j];
	for($i=0,$c=count($currentArr);$i<$c;$i++){
		echo " > " . $currentArr[$i] . "<br>";
	} 
}*/

for($j=0; $j<count($currentArr); $j++){	
echo "Players in game Game ".($j+1)."<br>";
		for($i=0; $i<count($currentArr[$j]); $i++){
		echo " > " . $currentArr[$j][$i] . "<br>";
	} 
}