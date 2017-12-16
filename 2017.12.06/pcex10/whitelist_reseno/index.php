<?php

$pages = array("index.html","index.php","index.htm");
$index = array_rand($pages,1);
$page = $pages[$index];
if(in_array($page,$pages)){
    include "pages/" .  $page;
	}






