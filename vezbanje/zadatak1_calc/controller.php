<?php


function calc($x, $y, $operacija){
	switch($operacija){
		case "+":
			$r = $x + $y;
			$sabiranje = 'sabiranje';
			break;
		case "-":
			$r = $x - $y;
			$oduzimanje = 'oduzimanje';
			break;
		case "*":
			$r = $x * $y;
			$mnozenje = 'mnozenje';
			break;
		case "/":
			$r = $x / $y;
			$deljenje = 'deljenje';
			break;
		default:
			$r = '';
			echo "Morate uneti sve trazene podatke.";
			break;
	}
	return $r;
}


if(isset($_GET['prviBroj'])&&isset($_GET['drugiBroj'])&&isset($_GET['operacija'])){
	$x = $_GET['prviBroj'];
	$y = $_GET['drugiBroj'];
	$o = $_GET['operacija'];
	$rezultat = calc($x,$y, $o);
} else {
	echo "Morate uneti sve trazene podatke.";
}

echo $x." ".$o." ".$y." = ".$rezultat;
//calc($x,$y, $o);
