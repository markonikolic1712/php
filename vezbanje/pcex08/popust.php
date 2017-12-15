<?php

$price = rand(10,100);
$isNew = rand(0,1)==1;
$discount = 0.2;

$okvir = $isNew ? 'style="border:1px solid red"' : '';

if($price>50) {
	$priceDiscount = $price*(1-$discount);
	$crta = $priceDiscount." <del>(".$price.")</del>";
} else {
	$crta = $price;
}

echo "<span ".$okvir.">&nbsp;".$crta."&nbsp;</span>";
//echo "<br>".$isNew;







?>