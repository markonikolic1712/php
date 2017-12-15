<?php
$currentTemperature		= mt_rand(0,38);
$rain				= mt_rand(0,1)==1;
$mug				= mt_rand(0,1)==1;
define("TEMP_LIMIT",		25);
$img_cloud			= "ic_wb_cloudy_black_24dp_2x.png";
$img_sun			= "ic_wb_sunny_black_24dp_2x.png";

$finalImage = $img_cloud;
if(!$rain){
	if($currentTemperature >= TEMP_LIMIT){
		$finalImage = $img_sun;
	}
}
?>
<h1>Weather forecast</h1>
<img src="<?php echo $finalImage; ?>" />
<?=$rain?"<div style='font-size:1.2em;'>Will be rain</div>":""?>
<div style="font-size:1.2em;">Current temperature : <?=$currentTemperature?>&#8451;</div>
<h2>Suggested clothes</h2>
<span style="font-size:1.2em;">
<?php
if($rain){ 
	echo "Umbrella ";
}
if($rain||$mug){ 
	echo "Boots ";
}
if($currentTemperature>TEMP_LIMIT){ 
	echo "Shirt "; 
} else {
	echo "Jacket ";
}
?></span>
