<?php
define("TOTAL_NUMBERS",72);
define("PAYOUT",5);
$winningNumbers = array();
$numbers = array();

for($k=1; $k<PAYOUT+1; $k++){
	while(true){
		$numbers[$k] = rand(1, TOTAL_NUMBERS);
		for($j=1; $j<$k; $j++){
			if($numbers[$j] == $numbers[$k]){
				continue(2);
			}
		}
		$niz[$k] = $numbers[$k];
		break;
	}
}


for($i=1; $i<TOTAL_NUMBERS+1;$i++){
		$winningNumber = '';
	foreach($niz as $provera){
		if($i == $provera){
			$winningNumber = 'color: red;';
		}
	}
	echo "<div style='{$winningNumber}float:left;background-image:url(ball.png);width:100px;height:70px;background-size: contain;font-size:2em;text-align:center;padding-top:30px;'>$i</div>";
}




