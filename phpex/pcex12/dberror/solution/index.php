<?php
require "config.php";
$defaultLocale = "en";
$errorDictionary = [
	"en"=>[
		2002=>"Please check server address",
		1045=>"Access denied for your user, please check username and password and try again",
		1049=>"Your database isn't correct. Please check your database name",
		"unknown"=>"Unknown database error"
	],
	"sr"=>[
		2002=>"Proverite adresu database servera",
		1045=>"Nedozvoljen pristup. Molimo proverite korisnicko ime i šifru",
		1049=>"Naziv baze nije ispravan. Molimo, proverite naziv baze", 
		"unknown"=>"Nepoznata greška"
	]
];
$activeLocale 	= isset($_GET['loc']) && array_key_exists($_GET['loc'],$errorDictionary)
		? $errorDictionary[$_GET['loc']] 
		: $errorDictionary[$defaultLocale];

$conn = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 

if($err = mysqli_connect_error($conn)){
	$errorCode = mysqli_connect_errno();
	if(array_key_exists(mysqli_connect_errno(),$activeLocale)){
		echo $activeLocale[$errorCode];
	} else {
		echo $activeLocale["unknown"];
	}
}