<?php
$playersPerMatch = array(3,2,5,1,2,3,4,5); 

foreach($playersPerMatch as $mec) {
	$mecevi[] = array_fill(1, $mec, []);
}

print_r($mecevi);