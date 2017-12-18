<?php
 
function genrateOdd(){
	return mt_rand(0, 100) / 10;
}

$odds = [
	"Manchester United - Liverpool" => [
				1=>["2.5"=>genrateOdd(),"3.0"=>genrateOdd(),"3.5"=>genrateOdd(),"4.0"=>genrateOdd()],
				2=>["2.5"=>genrateOdd(),"3.0"=>genrateOdd(),"3.5"=>genrateOdd(),"4.0"=>genrateOdd()]
			],

	"New Castle - Leeds" => [
				1=>["3.15"=>genrateOdd(),"3.20"=>genrateOdd(),"3.30"=>genrateOdd(),"3.40"=>genrateOdd()],
				2=>["3.15"=>genrateOdd(),"3.20"=>genrateOdd(),"3.30"=>genrateOdd(),"3.40"=>genrateOdd()]
			]
]; 

function repack($arr){
	global $niz;
	foreach ($arr as $M => $JiD) {
		foreach ($JiD[1] as $hc => $kvota) {
			$niz[$M][$hc]['a'] = $JiD[1][$hc];
			$niz[$M][$hc]['b'] = $JiD[2][$hc];
		}
	}
}
repack($odds);
foreach($niz as $M => $matchOdds){
	echo "<div style='border:1px solid red;padding:4px;margin:4px;'><strong>{$M}</strong><br>";
	echo "<div style='float:left;width:50px;'>HC</div>";
	echo "<div style='float:left;width:50px;'>1</div>";
	echo "<div style='float:left;width:50px;'>2</div>";
	echo "<div style='clear:both;'></div>";
	foreach($matchOdds as $hc=>$kvota){
		echo "<div style='float:left;width:50px;'>{$hc}</div>";
		echo "<div style='float:left;width:50px;'>{$kvota['a']}</div>";
		echo "<div style='float:left;width:50px;'>{$kvota['b']}</div>";
		echo "<div style='clear:both;'></div>";
	} 
	echo "</div>";
}

print_r($odds);
print_r($niz);