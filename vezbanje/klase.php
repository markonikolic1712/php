<?php
class User {
	public $firstname;
	public $lastname;
	public $nickname;
	public $password;
	public $email;
	public $id;

	function __construct($id,$firstname="",$lastname="",$nickname="",$password="",$email=""){
		$this->firstname = $firstname;
		$this->lastname  = $lastname;
		$this->nickname  = $nickname;
		$this->password  = $password;
		$this->email     = $email;
		$this->id        = $id;
	}

	function __toString(){
		return '['
				.'firstname='.$this->firstname
				.', lastname='.$this->lastname
				.', nickname='.$this->nickname
				.', password='.$this->password
				.', email='.$this->email
				.', id='.$this->id
				.']';
	}

	function show(){
		echo $this;
	}

	static function fromId($id){
		return new self($id);
	}

	static function checkCredentials($user){
		return true;
	}
}

$pera = User::fromId(123);
echo User::checkCredentials($pera);
$pera->show();






