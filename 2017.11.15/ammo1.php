<?php
	
	
$total_ammo_pieces	= 250;
$round_storage		= 20;
$total_rounds		= 2;

// $pieces_over = $total_ammo_pieces%$round_storage;
$rounds_needed = floor($total_ammo_pieces/$round_storage);
$pieces_over = $total_ammo_pieces - $total_rounds * $round_storage;
$enough = ceil($total_ammo_pieces/$round_storage);
$dovoljno = $total_rounds >= $enough;

if($pieces_over < 0) $pieces_over = 0;
if($total_rounds < $rounds_needed) $rounds_needed = $total_rounds;


echo "Ukupna količina metaka je: ".$total_ammo_pieces."<br>";
echo "Potrebno je ".$enough." okvira za sve metke.<br>";
echo "Biće ".$rounds_needed." punih okvira, ".$pieces_over." metaka ce biti višak.<br>";
if($dovoljno == 1) {
	echo "Ima dovoljno okvira.";
} else {
	echo "Nema dovoljno okvira.";}
	
?>