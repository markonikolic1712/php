<?php

$niz = array("srbija"=>"beograd", "francuska"=>"pariz", "engleska"=>"london",
"usa"=>"vasington");
function stampa($kljuc, $vrednost){
	echo "$kljuc je kljuc, a $vrednost je vrednost<hr>";
}

array_walk($niz, "stampa");