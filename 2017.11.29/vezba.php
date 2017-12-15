
<select>
<?php
for($i=1970; $i<2000;$i++){
	if($i=1960||$i=1971){
			continue;
		}
		echo "<option>{$i}</option>";	
}
?>
</select>


