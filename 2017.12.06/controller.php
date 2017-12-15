<?php

$output = '';
for($i=0;$i<count($tacke);$i++){
	$tackax = $tacke[$i][0];
	$tackay = $tacke[$i][1];
	$output .= "<img style='position:absolute; top:{$tackax}px; left:{$tackay}px;' width=100 src='{$vehicle[0]}'/>";

}
