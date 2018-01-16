<?php

 require "ul.php";



$lista = new Ul([
	new Li("aboutus.php","About us"),
	new Li("home.php","Home"),
	new Li("privacy.php","Privacy")
]);

$lista->render();