<?php 
function loginform(){ 
	$images 	= ["login1.jpg","login2.jpg","login3.jpg"];
	$imageIndex 	= mt_rand(0,2);
	$selectedImage 	= $images[$imageIndex]; 
	echo "<div style='background-image:url({$selectedImage});background-repeat:no-repeat;width:240px;padding:5px;'>"; 
	echo "<form>";
	echo "Username: <input type='text' /><br><br>"; 
	echo "Password: <input type='text' /><br><br>"; 
	echo "<input type='submit' value='Login' />"; 
	echo "</form>";
	echo "</div>";
} 
loginform();
