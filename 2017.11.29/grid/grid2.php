<?php
$sirina = rand(20, 40);
$visina = rand(20, 40);
$pomak = $sirina/$visina;
$korak = 0;

for ($i=0; $i<$visina; $i++){
	$korak += $pomak;
	$d = round($korak)-1;
	for($j=0; $j<$sirina; $j++){
		if($j==0 || $j==$sirina-1 || $i==0 || $i==$visina-1){
			echo "X";
			if ($j==$sirina-1) echo "<br>";
		} else {			
			echo $j == $d ? "O" : "H";
		}
	}
}
echo "Sirina: ".$sirina."<br>";
echo "Visina: ".$visina."<br>";

?>
