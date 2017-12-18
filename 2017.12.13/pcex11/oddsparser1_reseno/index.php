<?php  
//$jsonString = file_get_contents("http://188.226.162.108:8085");
/* If link doesn't work, open local file */
$jsonString = file_get_contents("data.json");
$oddsReceived = json_decode($jsonString);


function repack($arr){
	foreach ($arr[0] as $key => $match) {
			$niz[$key]['match'] = $match;
			foreach($arr[1][$key] as $k => $v){
			$niz[$key]['odds'][$k] = $v;
			}
		}
	return $niz;
}

function stampa($arr){
	foreach ($arr as $utakmica) {
		echo "<div style='border:1px solid red;padding:4px;margin:4px;'><strong>{$utakmica['match']}</strong><br>";
		echo "<div style='float:left;width:60px;'>Winner</div>";
		echo "<div style='float:left;width:50px;'>1</div>";
		echo "<div style='float:left;width:50px;'>0</div>";
		echo "<div style='float:left;width:50px;'>2</div>";
		echo "<div style='clear:both;'></div>";
		echo "<div style='float:left;width:60px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>";
		echo "<div style='float:left;width:50px;'>{$utakmica['odds'][0]}</div>";
		echo "<div style='float:left;width:50px;'>{$utakmica['odds'][1]}</div>";
		echo "<div style='float:left;width:50px;'>{$utakmica['odds'][2]}</div>";
		echo "<div style='clear:both;'></div>"; 
		echo "</div>";
	}

}


$prepakovano = repack($oddsReceived);
stampa($prepakovano);
