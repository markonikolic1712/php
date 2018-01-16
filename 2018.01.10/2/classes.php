<?php
class Point {
	public $x;
	public $y;
	public function __construct($x,$y){
		$this->x = $x;
		$this->y = $y;
	}
}
class Ship {
	public $name;
	public $damage = 100;
	public $shield = 1000;
	public $image;
	public $pos;
	public function __construct($name,$image,Point $pos){
		$this->name  = $name;
		$this->image = $image;
		$this->pos   = $pos;
	}
	function render(){
		echo "<img src='{$this->image}' width=100; style='width=100px; height:60px; position: absolute; top={$this->pos->y}px; left={$this->pos->x}px;'/><br>";
		echo $this->pos->y;
		echo $this->pos->x;
	}
}