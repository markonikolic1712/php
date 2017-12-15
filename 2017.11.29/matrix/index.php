<?php
$side = rand(5,15);
$x = $side;
$y = $side;

for($i=0;$i<$y;$i++){
  for($u=0;$u<$x;$u++){
     if($u>0 && $u<$x-1 && $i>0 && $i<$y-1){
        echo $u==$i ? "O" : "H";
     } else {
	echo "X";
     }
  }
  echo "<br>";
}

