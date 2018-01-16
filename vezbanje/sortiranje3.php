<?php

$niz = [];
for($n=0;$n<6;$n++){
	while(true){
		$niz[$n] = rand(1,10);
		for($k=0;$k<$n;$k++){
			if($niz[$n]==$niz[$k]){
				continue(2);
			}
		}
		$niz[$n] = $niz[$k];
		break;
	}
}

print_r($niz);
echo "<br>";

for($i=0;$i<count($niz);$i++){
	for($j=$i+1;$j<count($niz);$j++){
		if($niz[$j]<$niz[$i]){
			$temp = $niz[$i];
			$niz[$i] = $niz[$j];
			$niz[$j] = $temp;
		}
		echo "<br>i={$i} j=".$j;
		print_r($niz);
	}
	echo "<hr>";
}

print_r($niz);