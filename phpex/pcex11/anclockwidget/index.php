<?php 
function showClockWidget(){
	$hours 		= (int)date("H");
	$minutes 	= (int)date("i");
	$seconds 	= (int)date("s"); 
	$clockSize	= 100;
	$origin 	= $clockSize / 2;
	$angleOffset	= 90;
	$secondsAngle	= (360/60)*$seconds - $angleOffset;
	$minutesAngle	= (360/60)*$minutes - $angleOffset;
	$hoursAngle	= (360/12)*$hours - $angleOffset;  
	/* Clock outline */
	echo "<div style='position:relative;width:{$clockSize}px;height:{$clockSize}px;-webkit-border-radius:{$origin}px;-moz-border-radius:{$origin}px;border-radius:{$origin}px;border:1px solid blue;'>"; 
		/* Seconds needle */
		echo "<div style='width:{$origin}px;height:1px;background-color:red;position:absolute;top:{$origin}px;left:{$origin}px;";
		/* Rotation */
		echo "-ms-transform: rotate({$secondsAngle}deg);-webkit-transform: rotate({$secondsAngle}deg);transform: rotate({$secondsAngle}deg);transform-origin: 0% 0%;'></div>";
		// /* End Seconds needle */
		/* Minutes needle */
		echo "<div style='width:{$origin}px;height:1px;background-color:green;position:absolute;top:{$origin}px;left:{$origin}px;";
		/* Rotation */
		echo "-ms-transform: rotate({$minutesAngle}deg);-webkit-transform: rotate({$minutesAngle}deg);transform: rotate({$minutesAngle}deg);transform-origin: 0% 0%;'></div>";
		/* End minutes needle */
		/* Hours needle */
		$hoursSize = $origin*0.7;
		echo "<div style='width:{$hoursSize}px;height:1px;background-color:green;position:absolute;top:{$origin}px;left:{$origin}px;";
		/* Rotation */
		echo "-ms-transform: rotate({$origin}deg);-webkit-transform: rotate({$hoursAngle}deg);transform: rotate({$hoursAngle}deg);transform-origin: 0% 0%;'></div>";
		/* End hours needle */
	echo "</div>"; 
	/* End clock outline */ 
} 
showClockWidget();
