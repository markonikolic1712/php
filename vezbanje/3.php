<?php

class Point
{
	public $x;
	public $y;
	public function Show(){
		echo "Position is x: {$this->x} y: {$this->y}<br>";
	}
}

$tacka = new Point();
$tacka->x = 23;
$tacka->y = 32;
$tacka->Show();

$tacka = new Point();
$tacka->x = 44;
$tacka->y = 2;
$tacka->Show();

/*
class Mk
{
	private $name;
	public function __get($name){
		return $this->$name;
	}
	public function __set($name, $value){
		$this->$name = $value;
	}
}

$mk = new Mk();
$mk->ime = "Pera";
echo $mk->ime;
*/








