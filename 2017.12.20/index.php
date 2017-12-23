<?php

$konekcija = mysqli_connect("localhost","root","");

print_r($konekcija);













/*
$konekcija = mysqli_connect("localhost","root","","g6_zaposleni");
if(!$konekcija){
	print_r(mysqli_connect_error());
}


$res = mysqli_query($konekcija,"select * from glumice");

while($red = mysqli_fetch_assoc($res)){
	echo "<div style=>";
	
	echo "</div>";
	print_r($red);
	}*/

