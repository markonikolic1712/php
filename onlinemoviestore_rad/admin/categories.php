<?php
	print_r($_POST);
?>
Categories
<form method="post" action="">
<select name="selCategory">
	<option value="1">Select category</option>
</select>
<br>
Name:<br>
<input type="text" name="tb_name">
<br>
Description:<br>
<input type="text" name="tb_description">
<br><br>
<input type="submit" name="btn_insert" value="Add new">
<input type="submit" name="btn_update" value="Update">
<input type="submit" name="btn_delete" value="Delete">
</form>