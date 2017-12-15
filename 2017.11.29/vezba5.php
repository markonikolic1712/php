
<select>
<?php
for($i=1950; $i<2000;$i++){
	if($i==1960||$i==1971){
			continue;
		} else {
		echo "<option>{$i}</option>";	
}
}
?>
</select>


