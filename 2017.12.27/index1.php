<?php

class Kafa {}









$kafa = [
	"naziv"=>"Moka",
	"cena"=>8
];

$kafa = (object)$kafa;
?>



<h3 style='margin:4px'><?=$kafa->naziv?></h3>
Cena: <?=$kafa->cena?>