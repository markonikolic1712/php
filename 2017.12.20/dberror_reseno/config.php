<?php
$error = mt_rand(0,2);
switch($error){
	case 0:
		$dbhost = "hello world";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "mysql"; 
	break;
	case 1:
		$dbhost = "127.0.0.1";
		$dbuser = "some non existing user";
		$dbpass = "";
		$dbname = "mysql";  
	break;
	case 2:
		$dbhost = "127.0.0.1";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "my non existing database";   
	break;
}

$jezik = ["sr" => "srpski", "en" => "engleski", "ru" => "ruski"];
$poruke = [
			"sr" => ["Proverite adresu servera","Broj greske je: "],
			"en" => ["Please check server address","Error code is: "],
			"ru" => ["Проверить адрес сервера","Код ошибки: "]
			];