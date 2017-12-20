<?php
	
$total_ammo_pieces = isset($_GET["ukupno"]) ? $_GET["ukupno"] : "";
$round_storage = isset($_GET["okvir"]) ? $_GET["okvir"] : "";
$total_rounds = isset($_GET["raspolozivo"]) ? $_GET["raspolozivo"] : "";
/*
http://php.net/manual/en/types.comparisons.php
The way PHP handles comparisons when multiple types are concerned is quite confusing.

For example:
"php" == 0

This is true, because the string is casted interally to an integer. 
Any string (that does not start with a number), when casted to an integer, will be 0.
*/




if($total_ammo_pieces == 0 || $round_storage == 0 || $total_rounds == 0) {
		echo "Morate uneti neku brojčanu vrednost.";
	} else {
		$rounds_needed = floor($total_ammo_pieces/$round_storage);
		$pieces_over = $total_ammo_pieces - $total_rounds * $round_storage;
		$enough = ceil($total_ammo_pieces/$round_storage);
		$dovoljno = $total_rounds >= $enough;

		if($pieces_over < 0) $pieces_over = 0;
		if($total_rounds < $rounds_needed) $rounds_needed = $total_rounds;


		echo "Ukupna količina metaka je: ".$total_ammo_pieces."<br>";
		echo "Potrebno je ".$enough." okvira za sve metke.<br>";
		echo "Biće ".$rounds_needed." punih okvira, ".$pieces_over." metaka ce biti višak.<br>";
		if($dovoljno == 1) {
			echo "Ima dovoljno okvira.";
		} else {
			echo "Nema dovoljno okvira.";}
}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Municija</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form>
			<p>Ukupan broj metaka: <input type="text" name="ukupno"><br></p>
			<p>Kapacitet jednog okvira: <input type="text" name="okvir"><br></p>
			<p>Broj raspoloživih okvira: <input type="text" name="raspolozivo"></p>
			<input type="submit" name="submit" value="Izračunaj"/>
		</form>
	</body>
</html>

