<?php

class Korisnik {
	public $id;
	public $ime;
	public $email;

	function __construct($id, $ime, $email, $style){
		$this->id = $id;
		$this->ime = $ime;
		$this->email = $email;
		$this->style = $style;
	} 

	function __toString(){
		return 
		"<div  style='{$this->style}'>
			<tr>
				<td>{$this->id}</td>
				<td>{$this->ime}</td>
				<td><a href='mailto:{$this->email}''>{$this->email}</a></td>
			</tr>
		</div>";
	}

	function show(){
		echo $this;
	}
}
$a = 222;
$b = "marko";
$c = "DDDDDDDDDD";
$style = "border: 2px solid red";
$obj = new Korisnik($a, $b, $c, $style);

$obj->show();