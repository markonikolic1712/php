<?php

$niz=[];

for($i=0; $i<count($niz)-1;$i++){
	for($j=$i+1;$j<count($niz);$j++){
		if($niz[$i]>$niz[$j]){
			$temp = $niz[$j];
			$niz[$j] = $niz[$i];
			$niz[$i] = $temp;
			}
		}
	}

print_r($niz);