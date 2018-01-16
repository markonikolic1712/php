<?php

class User {
	private $first_name;
	private $last_name;
	private $age;
	public $wife;
	
	function __construct($first_name="",$last_name="",$age=0){
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->age = $age;
	}
	
	function set($first_name,$last_name){
			$this->first_name = $first_name;
			$this->last_name = $last_name;
	}
	function show(){
		echo $this->first_name;
		echo " ";
		echo $this->last_name;
	}
	function isUnderage($a=18){
		return $this->age<$a;
	}
}

$u = new User("Uros", "Todorovic",15);
$w = new User("Lana","Del Ray");

echo is_null($w);
$u->wife = $w;

echo $u->wife->show();