<?php

define("COCKPIT",	1);
define("WING",		2);
define("ENGINE",	4);
$arr = array(COCKPIT,WING,ENGINE);
$fatal_hit 	= COCKPIT | WING;
$nonfatal_hit 	= ENGINE;

$hit = $arr[rand(0,2)];
echo $hit."<br>";

echo "Hit is fatal : " . (($fatal_hit & $hit) != 0) . "<br>";
echo "Hit is non fatal : " . (($nonfatal_hit & $hit) != 0) . "<br>";
print_r($arr);
echo "<br>";
var_dump($arr);
