<?php
$zone_x 	= 5;
$zone_y 	= 5;
$zone_w 	= 350;
$zone_h 	= 250;

$v1_x 		= mt_rand($zone_x,$zone_x+$zone_w);
$v1_y 		= mt_rand($zone_y,$zone_y+$zone_h);
$v1_a 		= mt_rand(0,360);

$v2_x 		= mt_rand($zone_x,$zone_x+$zone_w);
$v2_y 		= mt_rand($zone_y,$zone_y+$zone_h);
$v2_a 		= mt_rand(0,360);

$v1_pomak_x = cos($v1_a);
$v1_pomak_y = sin($v1_a);

$v2_pomak_x = cos($v2_a);
$v2_pomak_y = sin($v2_a);
$brojac1 = 0;
$brojac2 = 0;


echo "<div style='position:absolute;background-color:green;width:{$zone_w}px;height:2px;left:{$zone_x}px;top:{$zone_y}px;'></div>";
echo "<div style='position:absolute;background-color:green;width:2px;height:{$zone_h}px;left:{$zone_x}px;top:{$zone_y}px;'></div>";
$x_offset = $zone_x + $zone_w;
$y_offset = $zone_y + $zone_h;
echo "<div style='position:absolute;background-color:green;width:{$zone_w}px;height:2px;left:{$zone_x}px;top:{$y_offset}px;'></div>";
echo "<div style='position:absolute;background-color:green;width:2px;height:{$zone_h}px;left:{$x_offset}px;top:{$zone_y}px;'></div>";

while((($zone_x<$v1_x&&$zone_y<$v1_y)&&($x_offset>$v1_x&&$y_offset>$v1_y))||(($zone_x<$v2_x&&$zone_y<$v2_y)&&($x_offset>$v2_x&&$y_offset>$v2_y))){
	if($v1_x==$v2_x && $v1_y==$v2_y) {
		echo "Kolizija na koordinatama: X={$v1_x}, Y={$v1_y}<br>";
		break;
		}
	if(($zone_x<$v1_x&&$zone_y<$v1_y)&&($x_offset>$v1_x&&$y_offset>$v1_y)){
		$brojac1++;
		echo "<div style='position:absolute;background-color:red;width:2px;height:2px;left:{$v1_x}px;top:{$v1_y}px;'></div>";
		$v1_x += $v1_pomak_x;
		$v1_y += $v1_pomak_y;
		}
	if(($zone_x<$v2_x&&$zone_y<$v2_y)&&($x_offset>$v2_x&&$y_offset>$v2_y)){
		$brojac2++;
		echo "<div style='position:absolute;background-color:blue;width:2px;height:2px;left:{$v2_x}px;top:{$v2_y}px;'></div>";
		$v2_x += $v2_pomak_x;
		$v2_y += $v2_pomak_y;
		}
}

echo "Vozilo 1: {$brojac1} koraka<br>";
echo "Vozilo 2: {$brojac2} koraka<br>";
?>