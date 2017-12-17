<?php 
$heroesRaw = array(
	array("Cho'Gall",15,"http://us.battle.net/heroes/static/images/heroes/busts/chogall.jpg"),
	array("The lost vikings",5,"http://us.battle.net/heroes/static/images/heroes/busts/the-lost-vikings.jpg"),
	array("Tychus",12,"http://us.battle.net/heroes/static/images/heroes/busts/tychus.jpg"),
	array("Valla",25,"http://us.battle.net/heroes/static/images/heroes/busts/valla.jpg")
);


foreach($heroesRaw as $heroj){
			$ocena[$heroj[1]] = [$heroj[0], $heroj[2]];
		}
	ksort($ocena);
foreach ($ocena as $key => $value) {
		echo "<div style='width:200px;float:left;margin-right:10px;'><img src='".$value[1]."'><br>Name: ".$value[0]."<br>Grade: ".$key."<br></div>";
		}


