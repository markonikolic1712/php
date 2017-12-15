<?php
for($i=0,$currentGame=0,$c=count($waitingPlayers);$i<$c;$i++){ 
	$currentArr = &$$gameVariableNames[$currentGame];
	$currentArr[] = $waitingPlayers[$i];
	if(($i+1)%3==0){
		$currentGame++;
	}
} 	
print_r($currentArr);
