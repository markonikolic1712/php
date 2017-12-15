<?php
require "init.php";
require "logic.php";

 

for($j=0,$cc=count($gameVariableNames);$j<$cc;$j++){
	echo "Players in game {$gameVariableNames[$j]}<br>";
	$currentArr = &$$gameVariableNames[$j];
	for($i=0,$c=count($currentArr);$i<$c;$i++){
		echo " > " . $currentArr[$i] . "<br>";
	} 
}
