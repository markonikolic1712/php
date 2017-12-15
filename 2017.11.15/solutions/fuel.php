<?php
$car_consumption	= 11;
$car_fuel		= 15;
$car_distance		= 93;
define("DISTANCE","km");
define("VOLUME","l");
define("CONSUMPTION_UNIT",100);

/* WRITE YOUR SOLUTION HERE */

$fuelToConsume 		= (($car_consumption / CONSUMPTION_UNIT) * $car_distance);

echo "Trip statistics: " . PHP_EOL;
echo "To go: " . $car_distance . DISTANCE . PHP_EOL;
echo "Fuel to consume: " . $fuelToConsume . VOLUME  . PHP_EOL;
echo "Enough fuel: " . ($car_fuel >= $fuelToConsume) . PHP_EOL;
