<?php
$page = $_GET['page'];
$pages = array("index.html","index.php","index.htm");
if(in_array($page,$pages))
    include "pages/" .  $page;