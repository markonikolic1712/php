<?php
$matrica1=array(
	array(1,2,3),
	array(7,8,9),
	array(4,5,6)
);
$matrica2=array(
	array(4,5,6),
	array(1,2,3),
	array(7,8,9)
);
$matrica3 = array();

for($i=0;$i<sizeof($matrica1);$i++){
	for($j=0;$j<sizeof($matrica2);$j++){
		$matrica3[$i][$j] = $matrica1[$i][$j] + $matrica2[$i][$j];
	}
}

foreach($matrica3 as $niz){
	foreach($niz as $vrednost){
			echo "<div style='float:left; width:30px;'>{$vrednost}</div>";
		}
		echo "<br>";
	}