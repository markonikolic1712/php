<?php
$total_ammo_pieces	= 135;
$round_storage		= 20;
$total_rounds		= 6;


/* WRITE CODE HERE */
$rounds_needed		= floor($total_ammo_pieces / $round_storage);
$ammo_left		= $total_ammo_pieces % $round_storage;
$enough_rounds		= $rounds_needed <= $total_rounds;

echo "Rounds needed: " . $rounds_needed . PHP_EOL;
echo "Leftover ammo: " . $ammo_left . PHP_EOL;
echo "Enough rounds: " . $enough_rounds . PHP_EOL;


