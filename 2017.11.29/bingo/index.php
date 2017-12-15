<?php
$b1 		= 0;
$b2 		= 0;
$b3 		= 0;
$b4 		= 0;
$b5 		= 0;
$userEntry 	= 15;

for($i=1;$i<6;$i++){
	$temp = "b".$i;
	$stampa = 0;
	while(true){
		$$temp = rand(1, 10);
		for($j=1;$j<$i;$j++){
			$drugiBroj = "b".$j;
			if($$drugiBroj == $$temp){
				continue(2);
			}
		}
		$stampa = $$temp;
		break;
	}
	$boja = $userEntry==$stampa ? 'red' : '';
	echo "<div style='color:{$boja};float:left;background-image:url(ball.png);width:100px;height:70px;background-size: contain;font-size:2em;text-align:center;padding-top:30px;'>$stampa</div>";
}


?>