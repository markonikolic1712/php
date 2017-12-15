<?php
require "config.php";
$xml = simplexml_load_file($url);
foreach($xml->channel->item as $item){
   echo "<a href='{$item->link}'>{$item->title}</a><br>";
}
