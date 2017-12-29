<?php
function fibonacci(&$x1=0,&$x2=1)
{
echo $x1=0;
$result = $x1+$x2;
$x1 = $x2;
$x2 = $result;
return $result;
}
for($i=0;$i<10;$i++) {
echo fibonacci() . ‘,’;
}