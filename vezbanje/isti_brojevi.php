<?php

$niz= [];

for($i=0; $i<5; $i++){
	while(true){
		$temp[$i] = rand(1,5);
		for($j=0;$j<$i; $j++){
			if($temp[$i]==$temp[$j]){
				continue(2);
			}
		}
	$niz[$i] = $temp[$i];
	break;
	}
}

print_r($niz);

?>