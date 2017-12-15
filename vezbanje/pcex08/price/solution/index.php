<?php
$productPrice = rand(10,100);
/* WRITE CODE HERE */
define("LOW",		30);
define("AVERAGE",	40);
$productMark = "";
if($productPrice<LOW){
  $productMark = "Low price";
} else if($productPrice<AVERAGE) {
  $productMark = "Average price";
} else {
  $productMark = "Expensive";
}
echo "Product is " . $productMark;
