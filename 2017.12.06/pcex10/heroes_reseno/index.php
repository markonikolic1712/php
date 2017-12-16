<?php
$heroesRaw = array(
	array("ad"=>"http://ddragon.leagueoflegends.com/cdn/5.23.1/img/champion/Aatrox.png"),
	array("hybrid"=>"http://ddragon.leagueoflegends.com/cdn/5.23.1/img/champion/Akali.png"),
	array("ap"=>"http://ddragon.leagueoflegends.com/cdn/5.23.1/img/champion/Evelynn.png"),
	array("ad"=>"http://ddragon.leagueoflegends.com/cdn/5.23.1/img/champion/LeeSin.png"),
);


foreach ($heroesRaw as $key => $value) {
		foreach($value as $k => $slika){
			echo "<img src='".$slika."' />&nbsp;";
		}
}
