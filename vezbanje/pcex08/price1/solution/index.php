<?php
$price 		= rand(10,100);
$isNew		= rand(0,1)==1;
$discount	= 0.2;

/* WRITE YOUR CODE HERE */
$priceWithDiscount 	= $price;
$discounted 		= false;

if($price > 50){
 $priceWithDiscount 	= $priceWithDiscount - ($priceWithDiscount * $discount);
 $discounted		= true;
}
if($isNew){
   echo "<span style='padding:4px;border:1px solid red;'>";
}
echo $priceWithDiscount;
if($discounted){
   echo " <strike>($price)</strike>";  
}
if($isNew){
   echo "</span>";
}

