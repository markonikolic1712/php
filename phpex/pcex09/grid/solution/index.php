<?php
$x = rand(5,15);
$y = rand(5,15);

for($i=0;$i<$y;$i++){
  for($u=0;$u<$x;$u++){
     if($u>0 && $u<$x-1 && $i>0 && $i<$y-1){
	echo "H";
     } else {
	echo "X";
     }
  }
  echo "<br>";
}
