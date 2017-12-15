<?php
$heroesRaw = array(
	array("ad"=>"http://ddragon.leagueoflegends.com/cdn/5.23.1/img/champion/Aatrox.png"),
	array("hybrid"=>"http://ddragon.leagueoflegends.com/cdn/5.23.1/img/champion/Akali.png"),
	array("ap"=>"http://ddragon.leagueoflegends.com/cdn/5.23.1/img/champion/Evelynn.png"),
	array("ad"=>"http://ddragon.leagueoflegends.com/cdn/5.23.1/img/champion/LeeSin.png"),
);

$allHeroes = array();
foreach($heroesRaw as $k=>$v){
	foreach($v as $heroType=>$heroImage){
		$allHeroes[$heroType] = $heroImage;
	}
}

foreach($allHeroes as $hk=>$hi){
	echo "<img src='".$hi."' />&nbsp;";
}