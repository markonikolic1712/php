<?php

$konekcija = mysqli_connect("localhost","root","","g6_zaposleni");
if(!$konekcija){
	die("Pukla baza");
}


$filter = '';
if(isset($_GET['film'])){
	$filter = " where film = '{$_GET['film']}'";
}

$res = mysqli_query($konekcija, "select * from glumice{$filter}");


while($red = mysqli_fetch_assoc($res)){
	echo "<div style='width:200px;height:100px;border:1px solid red; padding:4px;margin:4px;float:left'>";
	echo "<a href='detalji.php?glumica={$red['imeprezime']}'><h3 style='margin:4px;text-align:center'>{$red['imeprezime']}</h3></a>";
	echo "<strong>Film: </strong><a href='?film={$red['film']}'>{$red['film']}</a>";
	echo "</div>";
}

?>






