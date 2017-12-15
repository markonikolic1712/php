<?php  
function genrateOdd(){
	return mt_rand(0, 100) / 10;
}
$odds = [
	"Manchester United - Liverpool" => [1=>["2.5"=>genrateOdd(),"3.0"=>genrateOdd(),"3.5"=>genrateOdd(),"4.0"=>genrateOdd()],2=>["2.5"=>genrateOdd(),"3.0"=>genrateOdd(),"3.5"=>genrateOdd(),"4.0"=>genrateOdd()]],
	"New Castle - Leeds" 		=> [1=>["3.15"=>genrateOdd(),"3.20"=>genrateOdd(),"3.30"=>genrateOdd(),"3.40"=>genrateOdd()],2=>["3.15"=>genrateOdd(),"3.20"=>genrateOdd(),"3.30"=>genrateOdd(),"3.40"=>genrateOdd()]],
]; 

function setHandicaps(&$odds){  
	foreach($odds as $matchKey=>&$matchOdds){ 
		foreach($matchOdds[1] as $hcKey=>$hcVal){
			$matchOdds[$hcKey][1] = $hcVal; 
			$matchOdds[$hcKey][2] = $matchOdds[2][$hcKey]; 
		} 
		unset($matchOdds[1],$matchOdds[2]);
	}
	
} 
setHandicaps($odds); 

foreach($odds as $matchTeams=>$matchOdds){
	echo "<div style='border:1px solid red;padding:4px;margin:4px;'><strong>{$matchTeams}</strong><br>";
	echo "<div style='float:left;width:50px;'>HC</div>";
	echo "<div style='float:left;width:50px;'>1</div>";
	echo "<div style='float:left;width:50px;'>2</div>";
	echo "<div style='clear:both;'></div>";
	foreach($matchOdds as $key=>$hcOdd){
		echo "<div style='float:left;width:50px;'>{$key}</div>";
		echo "<div style='float:left;width:50px;'>{$hcOdd['1']}</div>";
		echo "<div style='float:left;width:50px;'>{$hcOdd['2']}</div>";
		echo "<div style='clear:both;'></div>";
	} 
	echo "</div>";
}
 

