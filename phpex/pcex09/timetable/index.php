<?php
for($i=1;$i<32;$i++){
  $today = $i == date("j") ? "background-color:red;color:white;" : "";
  echo "<div style='{$today}float:left;width:30px;'>".$i."</div>";     
  if($i%7==0){
	echo "<div style='clear:both;'></div>";
  }
}
