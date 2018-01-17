<?php
class Igrac {
	// public $slika;
	// public $zastava;
	// public $ime;
	// public $prezime;
	// public $nadimak;
	// public $tim;
	// function __construct($slika,$zastava,$ime,$prezime,$nadimak,$tim){
	// 	$this->slika   = $slika;
	// 	$this->zastava = $zastava;
	// 	$this->ime     = $ime;
	// 	$this->prezime = $prezime;
	// 	$this->nadimak = $nadimak;
	// 	$this->tim     = $tim;		
	// }

	function box(){
		echo "<div style='width:300px;height:80px; border: solid 2px gray; margin:3px; overflow:hidden'>";
		echo "<img style='float:left; width:80px;  ' src='{$this->slika}'>";
		echo "{$this->ime} <a href='#'>{$this->nadimak}</a> {$this->prezime}<br>";
		echo "<img style='display:block; float:left;' src='{$this->zastava}'><br>";
		echo "<p>Currently playing for {$this->tim}</p>";
		echo "</div>";
	}	


	static function prikazIgraca(){
		$conn = new mysqli("localhost","root","","cs_igraci");
		$res  = $conn->query("select * from igraci");
			while($red = $res->fetch_object("Igrac")){
				$red->box();
			}
	}
}

Igrac::prikazIgraca();