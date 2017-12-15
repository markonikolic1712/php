<?php
$timestamp = strtotime(date('01/m/Y 00:00:00'));
$startDay  = date("w",$timestamp);

echo "<div style='float:left;width:30px;'>Po</div>";
echo "<div style='float:left;width:30px;'>Ut</div>";
echo "<div style='float:left;width:30px;'>Sre</div>";
echo "<div style='float:left;width:30px;'>Cet</div>";
echo "<div style='float:left;width:30px;'>Pet</div>";
echo "<div style='float:left;width:30px;'>Su</div>";
echo "<div style='float:left;width:30px;'>Ne</div>";
echo "<div style='clear:both;'></div>";

for($i=0;$i<$startDay;$i++){
    echo "<div style='float:left;width:30px;'>&nbsp;</div>";
}
for($i=1,$cnt=$startDay+1;$i<32;$i++){
  $today = $i == date("j") ? "background-color:red;color:white;" : "";
  echo "<div style='{$today}float:left;width:30px;'>".$i."</div>";     
  if($cnt++%7==0){
	echo "<div style='clear:both;'></div>";
  }
}
