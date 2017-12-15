<?php
$user = "admin";
$pass = "123";

$dbUser = "admin";
$dbPass = "1234";

/* YOUR CODE FROM HERE */
if($user == $dbUser && $pass == $dbPass){
   echo "Hello user";
} else {
   echo "Unauthorized access";
}

