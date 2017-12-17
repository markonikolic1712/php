<?php
function loginform(){ 
	$images = ["login1.jpg","login2.jpg","login3.jpg"];
	$index = rand(0,2);
	$slika = $images[$index];
	echo "<div style='width:340px; height:170; backgroung-image:url({$slika}); background-repeat:no-repeat;'></div>";






	}
loginform();