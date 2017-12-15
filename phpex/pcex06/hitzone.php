<?php

define("COCKPIT",	1);
define("WING",		2);
define("ENGINE",	4);

$fatal_hit 	= COCKPIT | WING;
$nonfatal_hit 	= ENGINE;

$hit = [1,2,4][rand(0,2)];

echo "Hit is fatal : " . (($fatal_hit & $hit) != 0) . PHP_EOL;
echo "Hit is non fatal : " . (($nonfatal_hit & $hit) != 0) . PHP_EOL;
