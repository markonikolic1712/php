<?php 
$arr = array(
"Anakin", "Luke", "Lea", "Obi-wan" ,"Bobba", "Palpatine", "Padme", "Yoda"  
);
for($i=0;$i<sizeof($arr);$i++)
{
?>
        <div style="
        text-align: center;  float: left; 
        padding-top: 40px; width: 100px; 
        height: 100px; border: 1px solid black; 
        background-color: #d3d3d3;">
        <?php echo $arr[$i]; ?>
        </div>
        <?php
        if(($i+1)%3==0) 
            echo "<div style='clear:both;'></div>";
}
