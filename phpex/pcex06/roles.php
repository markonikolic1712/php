<?php

define("STUDENT",	1);
define("PROFESSOR",	2);
define("SUPPORT",	4);
define("COORDINATOR",	8);

$user_status = SUPPORT;

$zone	= SUPPORT | COORDINATOR;

echo "Can access : " . (($zone & $user_status) != 0);


