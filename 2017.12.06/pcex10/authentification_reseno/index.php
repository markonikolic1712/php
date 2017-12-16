<?php
$users = array(
	"Peter"=>"Spiderman",
	"Klark"=>"Superman",
	"Bruce"=>"Batman"
);

$user 		= "Peter";
$password 	= "Spiderman";

foreach($users as $kor => $loz){
	if($user == $kor && $password == $loz){
		$izlaz = true;
		break;
	}
		$izlaz = false;
}

echo ($izlaz) ? "Moze" : "Nece moci";
