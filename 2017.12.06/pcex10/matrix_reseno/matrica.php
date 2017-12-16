<?php 
$niz=array(array(1,2,3),array(2,2,3),array(3,2,3));

foreach($niz as $prvi){
	foreach($prvi as $drugi){
		//echo "<div style='widt:30px;float:left;'></div>";
		echo $drugi."&nbsp;";
	}
	echo "<br>";
}