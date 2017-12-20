<?php
require "controller.php";
require "model.php";


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calc</title>
</head>
<body>
	<form>
		<p>Unesite prvi broj: <input type="text" name="prviBroj"></p>
		<p>Unesite drugi broj: <input type="text" name="drugiBroj"></p>
		<select name="operacija">
			<option>
			<?php
			foreach ($operacije as $ime => $znak) {
			echo "<option value={$znak}>{$ime}</option>";
			}
			?>
		</option>
		</select>
		<p><input type="submit" name="submit" value="Izračunaj"></p>
	</form>
</body>
</html>