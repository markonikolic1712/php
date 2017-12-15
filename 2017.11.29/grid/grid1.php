<?php
$sirina = 20;
$visina = 20;

for ($i=0; $i<$visina; $i++){
	for($j=0; $j<$sirina; $j++){
		if($j==0 || $j==$sirina-1 || $i==0 || $i==$visina-1){
			echo "X";
			if ($j==$sirina-1) echo "<br>";
		} else {
			echo $i == $j ? "O" : "H";
		}
	}
}
?>
