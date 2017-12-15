<?php
$name 	= "";
$lat	= 0.0;
$lon	= 0.0;
$grade	= 1;
$status	= false;

if(file_exists("data.txt")){
	$data = file("data.txt");
	$name 	= $data[0];
	$lat	= $data[1];
	$lon	= $data[2];
	$grade	= $data[3];
	$status = trim($data[4]) == "true";
}
?>

<html>
<head></head>
<body>
<h3><?=$name?></h3>
<strong>Location:</strong> lat: <?=$lat?> lon: <?=$lon?><br>
<strong>Grade:</strong> <?=$grade?><br>
<strong>Is open:</strong> <?=$status?><br>
</body>
</html>


