<?php
define("_ADMIN",2);
define("_USER",1);
$userStatus = rand(0,2);
switch($userStatus){
	case _ADMIN:
    		echo "<div style='border: 1px solid red; background-color: yellow; color: black; font-family: tahoma; font-size: x-small; padding: 2px;'>Welcome administrator</div>";
	break;
	case _USER:
		echo "<div style='border: 1px solid red; background-color: yellow; color: black; font-family: tahoma; font-size: x-small; padding: 2px;'>Welcome user</div>";
	break;
	default:
		echo "<div style='border: 1px solid yellow; background-color: red; color: white; font-family: tahoma; font-size: x-small; padding: 2px;'>Unknown user type</div>";
}

