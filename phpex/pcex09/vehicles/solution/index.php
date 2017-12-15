<?php
$zone_x 	= 5;
$zone_y 	= 5;
$zone_w 	= 350;
$zone_h 	= 250;

$v1_x 		= mt_rand($zone_x,$zone_x+$zone_w);
$v1_y 		= mt_rand($zone_y,$zone_y+$zone_h);
$v1_a 		= mt_rand(0,360);
$v1_steps 	= 0;

$v2_x 		= mt_rand($zone_x,$zone_x+$zone_w);
$v2_y 		= mt_rand($zone_y,$zone_y+$zone_h);
$v2_a 		= mt_rand(0,360);
$v2_steps 	= 0;


$v1_resolved 	= false;
$v2_resolved 	= false;

echo "<div style='position:absolute;background-color:green;width:{$zone_w}px;height:2px;left:{$zone_x}px;top:{$zone_y}px;'></div>";
echo "<div style='position:absolute;background-color:green;width:2px;height:{$zone_h}px;left:{$zone_x}px;top:{$zone_y}px;'></div>";
$x_offset = $zone_x + $zone_w;
$y_offset = $zone_y + $zone_h;
echo "<div style='position:absolute;background-color:green;width:{$zone_w}px;height:2px;left:{$zone_x}px;top:{$y_offset}px;'></div>";
echo "<div style='position:absolute;background-color:green;width:2px;height:{$zone_h}px;left:{$x_offset}px;top:{$zone_y}px;'></div>";
 
for(;!$v1_resolved||!$v2_resolved;){ 
	if(!$v1_resolved){
		echo "<div style='position:absolute;background-color:cyan;width:5px;height:5px;left:{$v1_x}px;top:{$v1_y}px;'></div>";
		if($v1_x>$zone_x+$zone_w || $v1_x<$zone_x || $v1_y>$zone_y+$zone_h || $v1_y<$zone_y){
			$v1_resolved=true;
		}
		$v1_an = $v1_a * pi() / 180;
		$v1_x+=round(5*cos($v1_an));
		$v1_y+=round(5*sin($v1_an));
		$v1_steps++;
	} 
	if(!$v2_resolved){
		echo "<div style='position:absolute;background-color:blue;width:5px;height:5px;left:{$v2_x}px;top:{$v2_y}px;'></div>";
		if($v2_x>$zone_x+$zone_w || $v2_x<$zone_x || $v2_y>$zone_y+$zone_h || $v2_y<$zone_y){
			$v2_resolved=true;
		}
		$v2_an = $v2_a * pi() / 180;
		$v2_x+=round(5*cos($v2_an));
		$v2_y+=round(5*sin($v2_an));  
		$v2_steps++;
	}
	if($v1_x==$v2_x&&$v1_y==$v2_y){
		echo "<div style='z-index:999;position:absolute;background-color:red;width:5px;height:5px;left:{$v2_x}px;top:{$v2_y}px;'></div>";
		$v1_resolved = true;
		$v2_resolved = true;
	}
} 
echo "Vehicle 1 steps: $v1_steps <br>";
echo "Vehicle 2 steps: $v2_steps <br>";


