<?php
class Competition {
	public $name;
	public $country;
	public static $csPlayers = 10;
	public static $moveTime  = 2;

	static function pricePerPlayer($pool, $players){
		return number_format($pool/$players,2,".","");
	}
}


echo "Dobitak po igracu: ".Competition::pricePerPlayer(15000,45);