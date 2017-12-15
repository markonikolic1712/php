<?php
define("TOTAL_NUMBERS",72);
define("PAYOUT",5);
$winningNumbers = array();
$numbers = array();
for($i=1;$i<=TOTAL_NUMBERS;$i++){
	$numbers[] = $i;
}
$arrSize = count($numbers);
for($i=0,$pos=0;$i<PAYOUT;$i++){
	$targetIndex 		= mt_rand($pos,$arrSize-1);
	$number 		= $numbers[$targetIndex];
	$winningNumbers[] 	= $number;
	$tmp 			= $number;
	$numbers[$targetIndex] 	= $numbers[$pos];
	$numbers[$pos] 		= $tmp;
	$pos++;
}

for($i=1;$i<=TOTAL_NUMBERS;$i++){
	$winningNumber = "";
	for($j=0,$c=count($winningNumbers);$j<$c;$j++){
		if($winningNumbers[$j]==$i) {
			$winningNumber = "color:red;";
		}
	}
	echo "<div style='{$winningNumber}float:left;background-image:url(ball.png);width:100px;height:70px;background-size: contain;font-size:2em;text-align:center;padding-top:30px;'>$i</div>";
}