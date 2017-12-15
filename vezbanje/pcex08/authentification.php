<?php

$user = "Marko";
$pass = "lozinka";

$validUser = "Marko";
$validPass = "lozinka";

if($user == $validUser && $pass == $validPass) {
	echo "Welcome, you are logged in.";
} else {
	echo "You can't log in.";
}

?>