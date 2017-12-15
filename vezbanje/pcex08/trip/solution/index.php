<?php
$startValue = 10;
$endValue = 120;
$trip = 150;

$fullTrack = $endValue - $startValue;

if($trip>$fullTrack)
        echo "You passed " . ($trip - $fullTrack) . " more than needed";          
else if($trip==$fullTrack)
        echo "You passed exact distance";    
else
        echo "You need " . ($fullTrack - $trip) . " to go";

