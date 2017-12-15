<?php

$s1n = mt_rand(0,1) == 1;
$s1i = "Vladimir";
$s2n = mt_rand(0,1) == 1;
$s2i = "Petar";
$s3n = mt_rand(0,1) == 1;
$s3i = "Dule";

for ($i=1; $i<4;$i++){
	$nagrada = "s".$i."n";
	$ime = "s".$i."i";
	if ($$nagrada) {
		echo "Student ".$$ime." je nagradjen.<br>";
	}
}