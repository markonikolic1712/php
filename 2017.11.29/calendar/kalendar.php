<?php
$dani = 31;
$meseci = 12;
$godine_start = 1980;
$godine_end = 2000;


$danas = date("j");
$okvir = '';
$mesec = isset($_GET['mesec']) ? $_GET['mesec'] : 1;
$prviDan = date('N', strtotime("2017-{$mesec}-01"));
include "meseciImena.php";
// Dani u nedelji
echo "<div style='float:left;width:30px;'>Po</div>";
echo "<div style='float:left;width:30px;'>Ut</div>";
echo "<div style='float:left;width:30px;'>Sre</div>";
echo "<div style='float:left;width:30px;'>Cet</div>";
echo "<div style='float:left;width:30px;'>Pet</div>";
echo "<div style='float:left;width:30px;'>Su</div>";
echo "<div style='float:left;width:30px;'>Ne</div>";
echo "<div style='float:left;border:1px solid red;text-align: center; width:80px;'>{$mesecIme}</div>";
echo "<div style='clear:both;'></div>";
// Datumi

for($j=1;$j<$prviDan;$j++){
	echo "<div style='float:left;width:30px;'>&nbsp;</div>";
}

for($i=1; $i<32; $i++){
	$okvir = ($i == date("j") && $mesec == date("n"))?'background:red;':'';
	if ($j%7==0){
		echo "<div style='float:left;width:30px;{$okvir}{$okvir}'>{$i}</div><br>";
		} else {
		echo "<div style='float:left;width:30px;{$okvir}'>{$i}</div>";
		}
		$j++;
}

?>

<!DOCTYPE html>
<html>
<body>
<p><br>Izaberite mesec:</p>
<form method="get">
	<select name="mesec">
		<?php
			for($m=1; $m<13; $m++){
			echo "<option value='{$m}'>{$m}</option>";
			}
		?>
	</select>
	<input type="submit" value="Potvrdi">
</form>
</body>
</html>