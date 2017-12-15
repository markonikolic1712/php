<?php
$player1_health		= 100;
$player2_health		= 100;
define("HEALTH","HP");

/* WRITE YOUR CODE HERE */
$player1_health-=rand(0,50);
$player2_health-=rand(0,50);
echo "Player1 dead (".$player1_health." ".HEALTH.") : " . ($player1_health <= 0) . PHP_EOL;
echo "Player2 dead (".$player2_health." ".HEALTH."): " . ($player2_health <= 0) . PHP_EOL;

$player1_health-=rand(0,50);
$player2_health-=rand(0,50);
echo "Player1 dead (".$player1_health." ".HEALTH.") : " . ($player1_health <= 0) . PHP_EOL;
echo "Player2 dead (".$player2_health." ".HEALTH."): " . ($player2_health <= 0) . PHP_EOL;

$player1_health-=rand(0,50);
$player2_health-=rand(0,50);
echo "Player1 dead (".$player1_health." ".HEALTH.") : " . ($player1_health <= 0) . PHP_EOL;
echo "Player2 dead (".$player2_health." ".HEALTH."): " . ($player2_health <= 0) . PHP_EOL;

$player1_health-=rand(0,50);
$player2_health-=rand(0,50);
echo "Player1 dead (".$player1_health." ".HEALTH.") : " . ($player1_health <= 0) . PHP_EOL;
echo "Player2 dead (".$player2_health." ".HEALTH."): " . ($player2_health <= 0) . PHP_EOL;

$player1_health-=rand(0,50);
$player2_health-=rand(0,50);
echo "Player1 dead (".$player1_health." ".HEALTH.") : " . ($player1_health <= 0) . PHP_EOL;
echo "Player2 dead (".$player2_health." ".HEALTH."): " . ($player2_health <= 0) . PHP_EOL;
