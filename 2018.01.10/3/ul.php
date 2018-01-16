<?php
class Li {
	public $link;
	public $title;
	function __construct($link,$title){
		$this->link  = $link;
		$this->title = $title;
	}
	function render(){
		echo "<li><a href='{$this->link}'>{$this->title}</a></li>";
	}
}


class Ul {
	public $stavke = [];
	function __construct($stavke = []){
		$this->stavke = $stavke;
	}
	function render(){
		echo "<ul>";
		foreach($this->stavke as $stavka){
			$stavka->render();
		}
		echo "</ul>";
	}
}
