<?php
$brojac = 0;
$k = 0;
define('BROJ_IGRACA', 3);


foreach($waitingPlayers as $player){
	if($brojac<BROJ_IGRACA){
		$currentArr[$k][$brojac] = $player;
		$brojac++;
	} else {
		$k++;
		$brojac = 0;	
		$currentArr[$k][$brojac] = $player;
		$brojac++;
	}
}




?>