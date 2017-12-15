<?php

define("STUDENT",	1);
define("PROFESSOR",	2);


$user_status = 6;

$zone	= STUDENT | PROFESSOR;
printf("%b", $zone);
echo "<br>";
printf("%b", $user_status);
echo "<br>";
printf ("%b",($zone & $user_status));
echo "<br>Access:".(($zone & $user_status) != 0);
$x=10;
$y= $x++ - ++$x;
echo $y;
//0011
//0100