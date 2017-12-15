<?php
$users = array(
	"Peter"=>"Spiderman",
	"Klark"=>"Superman",
	"Bruce"=>"Batman"
);

$user 		= "Peter";
$password 	= "Spiderman";

if($users[$user]==$password){
	echo "Welcome " . $user;
} else {
	echo "Unauthorized accesss";
}
