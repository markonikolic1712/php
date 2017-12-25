<?php
$conn = mysqli_connect('localhost','root','','g6_zaposleni');
$cats = mysqli_query($conn, "select * from cars");



?>
<form>
	<select>
		<?php
			while($res = mysqli_fetch_assoc($cats)){
				echo "<option><a href='?manu={$res['manu']}'>{$res['manu']}</a></option>";
			}
			echo "</select>";
			echo "<input type='submit' name='submit' value='Odaberi'>";
		?>	
</form>
