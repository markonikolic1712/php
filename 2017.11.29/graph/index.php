<?php
$a1 = mt_rand(0,100);
$a2 = mt_rand(0,100);
$a3 = mt_rand(0,100);
$a4 = mt_rand(0,100);
$a5 = mt_rand(0,100); 
$a6 = mt_rand(0,100); 
$b1 = "jan";
$b2 = "mar";
$b3 = "jun";
$b4 = "avg";
$b5 = "sep"; 
$b6 = "oct";

for($i=1;$i<7;$i++){
	$mesec = "b".$i;
	$prihod = "a".$i;
	echo "<div style='width:30px;float:left;'>".$$mesec."</div>"; 
	for($j=1;$j<$$prihod;$j++){
		if($$prihod<50){
			$boja = 'red';
		} elseif($$prihod>90){
			$boja = 'green';
		} else {
			$boja = 'orange';
		}
		echo "<div style='height:16px;width:10px;float:left;margin-right:1px;background-color:$boja;'></div>";
	}
	echo "<div style='clear:both;'></div>";
}
