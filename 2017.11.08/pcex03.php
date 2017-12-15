<?php

$price = 0.50;
$binary1 = 8;
$binary2 = 12;
$odd = 12.3;

printf("Price for this shirt is %.2f euro", $price);
echo "<br>";
printf("Number %d is %b in binary", $binary1, $binary1);
echo "<br>";
printf("Number %d is %b in binary, and %X in hexadecimal.", $binary2, $binary2, $binary2);
echo "<br>";
printf("Match winner odd for this match is %.1f", $odd);


/*

for ($i=1; $i<11; $i++)
{
    printf("Broj $i u binarnom je: %b", $i);
    echo "<hr>";
}
*/