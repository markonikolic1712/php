<?php
$current_position_x	= 120;
$current_position_y	= 80;

$geofence_x		= 50;
$geofence_y		= 50;
$geofence_w		= 150;
$geofence_h		= 100;

define("GEOFENCE_COLOR","red");
define("GEOFENCE_BG_COLOR","orange");
define("DEVICE_COLOR","blue");

$provera_h = $current_position_x > $geofence_x && $current_position_x < ($geofence_x + $geofence_w);
$provera_v = $current_position_y > $geofence_y && $current_position_y < ($geofence_y + $geofence_h);

$unutar = $provera_h && $provera_v;

//echo "Device entered geofence: " . $unutar;


?>
<!DOCTYPE>
<html>
	<head>
		<title>Geofence</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<p>Device entered geofence: <?=$unutar?></p>
		<div style="position:absolute; width:<?=$geofence_w?>px; height:<?=$geofence_h?>px; background-color:<?=GEOFENCE_BG_COLOR?>; border:2px solid <?=GEOFENCE_COLOR?>"></div>
		<div style="position:absolute; width:1px; height:1px; border:1px solid <?=DEVICE_COLOR?>; left:<?=$current_position_x-42?>px;top: <?=$current_position_y-8?>px; "></div>
	</body>
</html>
