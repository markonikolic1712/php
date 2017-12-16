<?php
$matrica1=array(
	array(1,2,3),
	array(7,8,9),
	array(4,5,6)
);
$matrica2=array(
	array(4,5,6),
	array(1,2,3),
	array(7,8,9)
);
$matrica3 = array();
for($i=0;$i<sizeof($matrica1);$i++)
{
       $matrica3[$i]=array();
       for($u=0;$u<sizeof($matrica1[$i]);$u++)   
        {
            $matrica3[$i][$u]=$matrica1[$i][$u] + $matrica2[$i][$u];
        }
}
foreach($matrica3 as $my)
    {
        foreach($my as $mx)
            echo "<div style='width:30px;float:left;'>".$mx."</div>";
        echo "<div style='clear:both;'></div>";
    }
?>
