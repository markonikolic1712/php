<?php
$current_position_x	= 125;
$current_position_y	= 80;

$geofence_x		= 50;
$geofence_y		= 50;
$geofence_w		= 150;
$geofence_h		= 100;

define("GEOFENCE_COLOR","red");
define("GEOFENCE_BG_COLOR","orange");
define("DEVICE_COLOR","red");

/* WRITE CODE HERE */

$inside_geofence = $current_position_x >= $geofence_x && $current_position_x <= ($geofence_x + $geofence_w) && $current_position_y >= $geofence_y && $current_position_y <= ($geofence_y + $geofence_h);

echo "<div style='position:absolute;width:".$geofence_w."px;height:".$geofence_h.";left:".$geofence_x."px;top:".$geofence_y."px;background-color:".GEOFENCE_BG_COLOR.";border:2px solid ".GEOFENCE_COLOR.";'></div>";
echo "<div style='position:absolute;width:5px;height:5px;background-color:blue;left:".$current_position_x."px;top:".$current_position_y."px;'></div>";
echo "<div>Device entered geofence: ".$inside_geofence."</div>";
