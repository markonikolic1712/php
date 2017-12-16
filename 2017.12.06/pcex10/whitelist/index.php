<?php
$arr1 = ['a','b','c','d'];
$arr2 = ['aaa','bbb','ccc','ddd'];
$arr3 = [3,8,2,5,9];

$arr_rez = array_combine($arr1,$arr2);


//print_r($arr_rez);

$arr3 = range(1,10);
print_r($arr3);

shuffle($arr3);
print_r($arr3);

sort($arr3);
print_r($arr3);










