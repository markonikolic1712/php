<?php
$extenzije = ["txt","doc","docx"];

if($_GET['ime']){
	$ime = $_GET['ime'];
} else {
	echo "<p style='color: red; font-weight:bold;'>Morate uneti ime fajla.</p>";
	die();
}
$ext = $_GET['ext'];
$fajl =  $ime.".".$ext;

$noviFajl = fopen($fajl,"w");
fwrite($noviFajl, "sssssssssss");



?>

<form action="" method="get">
	Unesite ime fajla u koji zelite da upisete:	<input type="text" name="ime"><br>
	Odaberite ekstenziju:
	<select name="ext" > 
		<?php
			foreach ($extenzije as $value) {
				echo "<option name='{$value}'>".$value."</option>";
			}
		?>
	</select>
	<br>
	Unesite teks koji zelite da se upise u fajl: <input type="text" name="text"><br>
	<input type="submit" name="submit" value="Upisi">
</form>