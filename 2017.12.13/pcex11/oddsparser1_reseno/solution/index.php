<?php  
$jsonString = file_get_contents("http://188.226.162.108:8085");
/* If link doesn't work, open local file */
$jsonString = file_get_contents("data.json");
$oddsReceived = json_decode($jsonString);

function setOdds($odds){
	$resultArray = [];
	foreach($odds[0] as $k=>$v){ 
		if($odds[1][$k][3]){
			$resultArray[$k] = ["match"=>$v,"odds"=>$odds[1][$k]]; 
		}
		
	}
	return $resultArray;
}

function showOdds($odds){
	foreach($odds as $odd){
		echo "<div style='border:1px solid red;padding:4px;margin:4px;'><strong>{$odd['match']}</strong><br>";
		echo "<div style='float:left;width:60px;'>Winner</div>";
		echo "<div style='float:left;width:50px;'>1</div>";
		echo "<div style='float:left;width:50px;'>0</div>";
		echo "<div style='float:left;width:50px;'>2</div>";
		echo "<div style='clear:both;'></div>";
		$odd = $odd["odds"];
		echo "<div style='float:left;width:60px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>";
		echo "<div style='float:left;width:50px;'>{$odd[0]}</div>";
		echo "<div style='float:left;width:50px;'>{$odd[1]}</div>";
		echo "<div style='float:left;width:50px;'>{$odd[2]}</div>";
		echo "<div style='clear:both;'></div>"; 
		echo "</div>";
	}
} 

$oddSet = setOdds($oddsReceived);  
showOdds($oddSet); 



 

