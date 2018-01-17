<?php
class Actress {
	public $imeprezime;
	public $godiste;
	public $film;
	function show(){
		echo "<h3>{$this->imeprezime}</h3>
			  Godiste: {$this->godiste}<br>Film: {$this->film}";
	}
	static function showActress(){
		$conn = new mysqli("localhost","root","","g6_zaposleni");
		$r = $conn->query("select * from glumice");
		while($red = $r->fetch_object("Actress")){
			$red->show();
		}
	}
}

Actress::showActress();
