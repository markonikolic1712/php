<?php
$playersPerMatch = array(3,2,5,1,2,3,4,5); 
$matches = array();
foreach($playersPerMatch as $ppm){
	$resultsArr[] = array_fill(0,$ppm,array());
}
print_r($resultsArr);