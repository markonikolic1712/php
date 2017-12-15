<?php
$currentTemperature		= mt_rand(0,38);
$rain					= mt_rand(0,1)==1;
$mug					= mt_rand(0,1)==1;

$kisa = "";
$obuca = "";
$odeca = "";
$kisobran = "";

	if($rain == 1){
		$slika = "oblak.png";
		$kisa = "<br>Will be rain";
		$kisobran = "Umbrella";
		$obuca = "Boots";
	} else {
		$slika = "sunce.png";
		$obuca = ($mug) ? "Boots" : "";
	}
	
	$odeca = ($currentTemperature >= 26) ? "Shirt" : "Jacket";
	
?>

<div style="border:1px solid red; width:200; height:200">
		<b>Weather forecast</b><br>
		<img style="align:middle;" src="<?=$slika;?>"/><?=$kisa?><br>
		<p>Curent temperature: <?=$currentTemperature?>&#8451</p>
		<p><b>Suggested clothes</b></p>
		<p><?=$kisobran." ".$obuca." ".$odeca;?></p>
</div>











