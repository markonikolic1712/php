<?php

$startValue = 10;
$endValue = 110;
$trip = 100;

$duzinaPuta = $endValue - $startValue;
if($trip > $duzinaPuta){
	echo "You passed ".($trip-$duzinaPuta)." more than needed.";
} elseif($trip < $duzinaPuta) {
	echo "You need ".($duzinaPuta-$trip)." to go.";
} else {
	echo "You passed exact distance.";
}
	
	
	
	
	
	
	
?>