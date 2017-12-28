<?php

function hit($a,$b){
	echo $a->ime." hit ".$b->ime;
	$a->health -= $b->damage;
	echo "<br>";
}

class Player {
	public $ime;
	public $health;
	public $damage;
	
	function status($o){
	echo "Current status for ($o->ime) is ($o->health)<br>";
}
}

$p1         = new Player;
$p1->ime    = "Kung Lao";
$p1->health = 100;
$p1->damage = 10;

$p2         = new Player;
$p2->ime    = "Sonya";
$p2->health = 80;
$p2->damage = 15;




hit($p1,$p2);
status($p1);
status($p2);
hit($p2,$p1);
status($p1);
status($p2);
hit($p2,$p1);
status($p1);
status($p2);









