<?php
define("ENABLED_NOTIFICATIONS",	1);
define("ENABLED_UPLOADS",	2);
define("USE_HTTP_COMMUNICATION",4);
define("ALLOW_LOGIN",		8);
define("ALLOW_PAYMENTS",	16);

$received = 0b01010;

$options_string = sprintf("%b",$received);
$options_string = str_pad($options_string,5,"0",STR_PAD_LEFT);

echo "Enabled notifications: " 		. (($received & ENABLED_NOTIFICATIONS) != 0) . PHP_EOL;
echo "Enabled uploads: " 		. (($received & ENABLED_UPLOADS) != 0) . PHP_EOL;
echo "Use https communication: "	. (($received & USE_HTTP_COMMUNICATION) != 0) . PHP_EOL;
echo "Allow login: " 			. (($received & ALLOW_LOGIN) != 0) . PHP_EOL;
echo "Allow payments: " 		. (($received & ALLOW_PAYMENTS) != 0) . PHP_EOL;
