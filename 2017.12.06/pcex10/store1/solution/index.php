<?php
$arr = array("TV", "Car", "Computer", "Phone"); 
for($i=0;$i<sizeof($arr);$i++)
{
echo "<div id='$i' style='border: 1px solid black; padding: 2px; margin: 2px; background-color: #d3d3d3;'>" . $arr[$i] . "</div>";
} 
