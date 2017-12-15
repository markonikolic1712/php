<?php
$a = rand(5,20);
$b = rand(5,20);

$tgA = $a / $b;
$tgB = $b / $a;
$ai = 0;
$bj = 0;
if ($a <= $b) {
    for ($i = 0; $i < $a; $i++) {
        for ($j = 0; $j < $b; $j++) {
            $ai = $j * $tgA;
            if ($i == 0 || $i == $a - 1 || $j == 0 || $j == $b - 1 || ($ai >= $i && $ai < ($i + 1))) {
                echo $i==0 || $i==$a-1 || $j==0 || $j== $b-1 ? "X" : "O";
            } else {
                echo "H";
            }
        }
        echo "<br />";

    }
} else {
    for ($i = 0; $i < $a; $i++) {
        for ($j = 0; $j < $b; $j++) {
            $bj = $i * $tgB;
            if ($i == 0 || $i == $a - 1 || $j == 0 || $j == $b - 1 || ($bj >= $j && $bj < ($j + 1))) {
                echo $i==0 || $i==$a-1 || $j==0 || $j== $b-1 ? "X" : "O";
            } else {
                echo "H";
            }
        }
        echo "<br />";
    }
}
