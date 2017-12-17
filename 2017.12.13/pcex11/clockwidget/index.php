<?php 
function showClockWidget(){
	$time = date("H:i:s");
	echo "<div style='padding:4px;margin:4px;background-color:orange;'>$time</div>";
} 
showClockWidget();
