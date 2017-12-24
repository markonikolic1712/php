<?php

$konekcija = mysqli_connect("localhost","root","","g6_zaposleni");

$res = mysqli_query($konekcija,"select * from glumice where imeprezime = '{$_GET['glumica']}'");

$red = mysqli_fetch_assoc($res);
?>

<h3><?=$red['imeprezime']?></h3>
<strong>Godiste: </strong><?=$red['godiste']?><br>
<strong>Najjaci naslov: </strong><a href="index.php?film=<?=$red['film']?>"><?=$red['film']?></a><br>



