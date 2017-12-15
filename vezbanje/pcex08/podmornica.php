<?php
$sub_x 		= rand(200,300);
$sub_y		= rand(200,300);
$sub_w		= rand(50,100);
$sub_h		= rand(50,100);

$proj_x		= rand(200,300);
$proj_y		= rand(200,300);
$color_sub = "green";
$color_proj = "blue";

if(($proj_x >= $sub_x && $proj_x<=($sub_x+$sub_w)) && ($proj_y >= $sub_y && $proj_y <= ($sub_y+$sub_h))) {
	$color_sub = "red";
	$color_proj = "yellow";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">	
	<title>Podmornica</title>
	<meta http-equiv="refresh" content="1">
</head>
<body>
	<div>
	 <svg width="500" height="500" style="position: absolute;">
		<rect x="<?=$sub_x?>" y="<?=$sub_y?>" width="<?=$sub_w?>" height="<?=$sub_h?>"
		style="fill:<?=$color_sub?>" />
	 </svg>
	 <svg width="500" height="500" style="position: absolute;">
		<rect x="<?=$proj_x?>" y="<?=$proj_y?>" width="4px" height="4px"
		style="fill:<?=$color_proj?>" />
	 </svg>
	 </div>
</body>	
</html>