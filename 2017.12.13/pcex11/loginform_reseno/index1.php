<?php
function loginform(){ 
	$images = ["login1.jpg","login2.jpg","login3.jpg"];
	$index = rand(0,2);
	$slika = $images[$index];
?>
	<div style='width:300px;height:150px; border:1px solid black; background-image:url(<?=$slika?>); background-repeat:no-repeat;padding:5px;'>
		<form>
			Username:<input type='text'/><br><br>
			Password:<input type='text'/><br><br>
			<input type='submit' value='Login' name='Posalji'/>
		</form>
	</div>
<?php
	}
loginform();