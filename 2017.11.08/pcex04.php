<?php
//  $naziv = "Pera &#381dera";


$naziv = "Pera Ždera";
$gps = array(44.356, 35.345);
$ocena = 8;
$status = true;
$color = "green";

if ($status === true) 
	{
		$status = "otvoren";

	} else {
		$status = "zatvoren";
		$color = "red";
	}

echo "Restoran \"$naziv\" se nalazi na sledecim koordinatama:"
	." longituda $gps[0], latituda $gps[1] i dobio je ocenu $ocena.<br>"
	."Restoran je trenutno ";
	?>
<span style="color: <?=$color?>; font-weight: bold"><?="$status.";?></span>




