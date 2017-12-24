<?php

$conn = mysqli_connect("localhost","root","","g6_zaposleni");

$res = mysql_query($conn, "select * from users where username='{$_GET['username']}' and password='{$_GET['password']}'");

$user = mysqli_fetch_assoc($res);

if($user){
	echo "Korisnik {$_GET['username']} je validan";
}else{
	echo "Nije validan korisnik";
}





