<?php
$conn = mysqli_connect('localhost','root','','g6_zaposleni');
$cats = mysqli_query($conn, "select * from cars");

?>
<form>
	<select name="menu">
		<?php
			while($res = mysqli_fetch_assoc($cats)){
				echo "<option><a href='{$res['manu']}'>{$res['manu']}</a></option>";
			}
			?>
	</select>
	<input type="submit" name="submit" value="Odaberi">
</form>
<?php
 
$marka = isset($_GET['menu']) ? $_GET['menu'] : 'Fiat';

$izlaz = mysqli_query($conn, "select * from cars where manu='{$marka}'");
foreach ($izlaz as $key) {
 		echo "<div style='border:1px solid red;padding:4px;margin:4px;width:200px;'>";
		echo "<h3 style='margin:4px;'>" . $key['model'] . "</h3>";
		echo "<img width=200 src='" . $key['image'] . "' /><br>";
		echo "<strong>Price: </strong>" . $key['price'];
		echo "</div>";
	}