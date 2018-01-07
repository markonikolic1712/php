<?php
require "controler.php";
		$conn = mysqli_connect("localhost","root","","pisanje_u_fajl");
		$res = mysqli_query($conn, 'select * from fajlovi');
?>
<!-- PISANJE U POLJA U BAZI -->
<html>
<body>
<div style="border:2px blue solid; float:left; margin:10px; padding:10px; word-wrap: break-word;">
	<h3>Upisivanje u bazu</h3>
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

<div style="width: 300px; height:100px; border:2px red solid; padding:5px; word-wrap: break-word;">
	<div>
		<?php
		if(!strlen($ime) == 0){
			?>
		U fajl <?=$fajl;?> je upisano:<br>
			<?php
				echo $text."<hr>";
				echo $obavestenje;
			} else { 
				echo "";
				}
			?>
	</div>
</div>
</div>

<!-- PRIKAZ I BRISANJE ODABRANIH FAJLOVA -->	
<div style="border:2px black solid; float:left; margin:10px; padding:10px">
	<h3>Prikaz fajlova iz baze</h3>
	Ukupan broj <i>fajlova</i> u bazi je: <?=$totalRows;?><br>
	Odaberite koji fajl zelite iz baze:
	<form action="" method="get">
		<select name="trazeniFajl">
		<?php
			while($izlaz = mysqli_fetch_object($res)){
				echo "<option value='{$izlaz->ime}'>{$izlaz->ime}.{$izlaz->ekstenzija}</option>";
				}
		?>
		</select>
		<input type="submit" name="prikazi" value="Prikazi">
		<input type="submit" name="obrisi" value="Obrisi">
	</form>
	<div style="width: 300px; height:100px; border:2px red solid; padding:5px; word-wrap: break-word;">
			<?=$prikazObavestenje;?>
	</div>
</div>
</body>
</html>