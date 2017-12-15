<?php
$defaultJezik = "sr";
require "model.php";

$odabraniJezik = isset($jezici[$_GET['lang']]) ? $_GET['lang'] : $defaultJezik;

$jezik = $jezici[$odabraniJezik];
?>

<a href="?lang=en">En</a> <a href="?lang=sr">Sr</a> <a href="?lang=ru">Ru</a><br><br>

<a href=""><?=$jezik['naslovna']?></a> <a href=""><?=$jezik['onama']?></a> <a href=""><?=$jezik['kontakt']?></a>