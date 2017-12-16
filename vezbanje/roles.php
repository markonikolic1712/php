<?php

define("STUDENT",	1);
define("PROFESSOR",	2);
define("SUPPORT",	5);
define("COORDINATOR",	8);

$user_status = SUPPORT;


/////
$zone	= SUPPORT | COORDINATOR;

printf("_%b", SUPPORT);
echo "<br>";
printf("%b",COORDINATOR);
echo "<br>-------------<br>";
printf("bitmaska-%b",$zone);
echo "<br>";
printf("%b",$zone & $user_status);
echo "<br>";

echo "Can access : " . (($zone & $user_status) != 0);


