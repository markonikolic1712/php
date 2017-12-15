<?php
$b1 		= 0;
$b2 		= 0;
$b3 		= 0;
$b4 		= 0;
$b5 		= 0;
$userEntry 	= $_GET['num'];

for($i=1;$i<6;$i++){
	$currentVar = "b".$i;
	$finalVal = 0;
	while(true){
		$desiredValue = rand(1,25);
		for($j=1;$j<$i;$j++){
			$varForCheck = "b".$j;
			if($$varForCheck==$desiredValue){
				continue(2);
			}
		}
		$$currentVar = $desiredValue;
		break;
	}
	$finalVal = $$currentVar;
	$userHit = $userEntry == $finalVal ? "color:red;" : "";
	echo "<div style='{$userHit}float:left;background-image:url(ball.png);width:100px;height:70px;background-size: contain;font-size:2em;text-align:center;padding-top:30px;'>$finalVal</div>";
}
