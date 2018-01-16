<?php
class Calculator
{
	public $opa;
	public $opb;
	public $res;
	public function __construct($opa, $opb){
		$this->opa = $opa;
		$this->opb = $opb;
	}

	public function Add(){
		$this->res = $this->opa + $this->opb;
	}
	public function Sub(){
		$this->res = $this->opa - $this->opb;
	}
	public function __toString(){
		return "Trenutna vrednost promenljive rezultat je: $this->res";
	}
}

$c = new Calculator(2,3);
$c->Add();
echo $c."<br>";

$c->Sub;
echo $c;







