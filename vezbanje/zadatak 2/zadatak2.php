<?php
$parametri = [	'tag' => ['div tag' => 'div','p tag' => 'p','strong tag' => 'strong','h2 tag' => 'h2','a tag' => 'a'], 
				'style' => ['crveno' => 'background: red; border:1px solid red',
							'plavo' => 'background: blue; border:1px solid red',
							'zeleno' => 'background: green; border:1px solid red'], 
				'sadrzaj' => [  'a' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
								'b' =>  'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb',
								'c' => 'cccccccccccccccccccccccccccccccccc'] 
			];

function drawTags($tag, $style, $sadrzaj, $broj){
		for($i=0; $i<$broj; $i++){
			echo "<{$tag} style='{$style}'>{$sadrzaj}</{$tag}>";
		}
}



	?>
	<form>
		<p>Koji tag zelite:</p>
		<select name="tag">
			<?php
				foreach ($parametri['tag'] as $key => $tag) {
					echo "<option value='{$tag}'>{$key}</option>";
				}
			?>
		</select>
		<p>Koji stil zelite:</p>
		<select name="style">
			<?php
				foreach ($parametri['style'] as $key => $style) {
					echo "<option value='{$style}'>{$key}</option>";
				}
			?>
		</select>
		<p>Koji sadrzaj zelite:</p>
		<select name="sadrzaj">
			<?php
				foreach ($parametri['sadrzaj'] as $key => $sadrzaj) {
					echo "<option value='{$sadrzaj}'>{$key}</option>";
				}
			?>
		</select>
		<br><p>Broj ponavljanja:</p>
		<input name="broj" type="text"><br><br>
		<input name="submit" type="submit" value="Iscrtaj">
	</form>
<?php

if(isset($_GET['tag'])&&isset($_GET['style'])&&isset($_GET['sadrzaj'])){
	$tag = $_GET['tag'];
	$style = $_GET['style'];
	$sadrzaj = $_GET['sadrzaj'];
	$broj = isset($_GET['broj']) ? $_GET['broj'] : 1;
} else {
	$broj = isset($_GET['broj']) ? $_GET['broj'] : 1;
	echo "Pograsan unos";
}
 
drawTags($tag, $style, $sadrzaj, $broj);

