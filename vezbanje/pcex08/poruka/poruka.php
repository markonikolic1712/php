<?php
$current_time = date("H\:i.");
$current_day = date("l\, j\. F Y");
$user_age = 18;
$user_name = "Peter";
$user_gender = "m";
$time_message = "morning";

// odredjivanje doba dana
if($current_time<12) {
		$time_message = "morning";
	} elseif ($current_time>=12&&$current_time<=18) {
		$time_message = "day";
	} else {
		$time_message = "evening";
	}
	
$user_message = "Hello dear, ".$user_name.". Good ".$time_message.".<br>You are ";

// odredjivanje pola	
switch($user_gender){
	case "m":
		$user_message .= ($user_age > 18)? "man" : "boy";
		$user_message .= ", and you are ";
		break;
	case "f":
		$user_message .= ($user_age > 18)? "woman" : "girl";
		$user_message .= ", and you are ";
		break;
	default:
		break;
}

// ispis poruka

echo $user_message.$user_age." years old.<br>";
echo "Today is ".$current_day.". Current time is ".$current_time;




	
	
	
	
	
	
?>