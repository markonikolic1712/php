<?php
$arr = array("Anakin","Luke","Lea","Obi-wan","Bobba","Palpantine","Padme","Yoda");
$brojac = 0;
foreach ($arr as $izlaz) {
	$brojac++;
	if ($brojac<3){
?>
<div style="float:left;background:#a0a0a0; border:1px solid black; margin-bottom:10px;
	height:100px; width:100px;line-height:100px; text-align:center;">
	<?=$izlaz;?>
</div>
<?php
	} else { $brojac = 0;
?>
<div style="float:left;background:#a0a0a0; border:1px solid black; margin-bottom:10px;
	height:100px; width:100px;line-height:100px; text-align:center;">
	<?=$izlaz;?>
</div>
<div style="clear:both;"></div>
<?php
	}
}
?>