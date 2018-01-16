<?php

//$niz= [rand(1,10),rand(1,10),rand(1,10),rand(1,10),rand(1,10)];
//$niz= [10,6,7,2,9,8];
$niz=[];
for($n=0; $n<6;$n++){
	while(true){
		$broj[$n] = rand(1,7); 
				for($k=0; $k<$n; $k++){
						if($broj[$n]==$broj[$k]){
							continue(2);
						}
				}
		$niz[$n] = $broj[$k];
		break;
	}
}

do{
	$zamena = false;
	for ($i=1; $i <count($niz); $i++) {
		if($niz[$i]<$niz[$i-1]){
			$zamena=true;
			$temp = $niz[$i-1];
			$niz[$i-1] = $niz[$i];
			$niz[$i] = $temp;
		}
		
	}
}
while($zamena);

print_r($niz);
