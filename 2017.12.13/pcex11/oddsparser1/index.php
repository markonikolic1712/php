<?php  
//$jsonString = file_get_contents("http://188.226.162.108:8085");
/* If link doesn't work, open local file */
$jsonString = file_get_contents("data.json");
$oddsReceived = json_decode($jsonString);

/* YOUR CODE HERE */ 

