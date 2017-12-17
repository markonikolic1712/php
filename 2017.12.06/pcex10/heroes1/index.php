<?php 
$heroesRaw = array(
	array("Cho'Gall",15,"http://us.battle.net/heroes/static/images/heroes/busts/chogall.jpg"),
	array("The lost vikings",5,"http://us.battle.net/heroes/static/images/heroes/busts/the-lost-vikings.jpg"),
	array("Tychus",12,"http://us.battle.net/heroes/static/images/heroes/busts/tychus.jpg"),
	array("Valla",25,"http://us.battle.net/heroes/static/images/heroes/busts/valla.jpg")
);

foreach($heroesRaw as $key=>$heroj){
	rsort($heroj);
	foreach($heroj as $v){
		print_r($v);
		echo "<div style='width:200px;float:left;margin-right:10px;'><img src='".$v[0]."'><br>Name: ".$v[2]."<br>Grade: ".$v[1]."<br></div>";
	}
}








