<?php
$dani = 31;
$meseci = 12;
$godine_start = 1980;
$godine_end = 2000;
?>
<select>
<?php
for($i=1;$i<=$dani;$i++){
	echo "<option>".$i."</option>";
}
?>
</select>
<select>
<?php
for($i=1;$i<=$meseci;$i++){
	echo "<option>".$i."</option>";
}
?>
</select>
<select>
<?php
for($i=$godine_start;$i<=$godine_end;$i++){
	echo "<option>".$i."</option>";
}
?>
</select>
