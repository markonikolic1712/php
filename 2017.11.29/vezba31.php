<?php
$b1 = 0;
$b2 = 0;
$b3 = 0;
$b4 = 0;
$b5 = 0;

for($i=1; $i<6;$i++){
	$ime = "b".$i;
	$$ime = mt_rand(0, 10);

	$promenljiva = $_GET['broj'];
	usleep(2000);
	if($promenljiva == $$ime){
		echo "Pogodak<br>: {$$ime}";
		continue;
	}
	echo "{$$ime}_";
}

