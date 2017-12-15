<?php

$b1 = 0;
$b2 = 0;
$b3 = 0;
$b4 = 0;
$b5 = 0;

for ($broj=1; $broj<6; $broj++) {
	$promenljiva = "b".$broj;
	$$promenljiva = rand(0,10);
}

$userNumber = isset($_GET['broj'])? $_GET['broj']:-1;


