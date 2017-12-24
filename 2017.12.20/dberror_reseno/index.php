<?php
require "config.php";

?>
<form>
	<p>Odaberite jezik:</p>
	<select name="lang">
		<?php
		foreach($jezik as $k => $v){
		echo "<option value='{$k}'>{$v}</option>";
		}
		?>
	</select>
	<p><input type="submit" name="submit" value="Posalji"></p>
</form>
<?php
$defaultJezik = "sr";

$izabraniJezik = isset($_GET['lang']) ? $_GET['lang'] : $defaultJezik;

$message = $poruke[$izabraniJezik][0];
$conn = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$err = mysqli_connect_errno($conn);
$greska = $poruke[$izabraniJezik][1];

if(!$conn){
	echo $message."<br>";
	echo $greska.$err;
	die();
}