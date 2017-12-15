<?php
$images = array(
	"http://www.dccomics.com/sites/default/files/files/character-pops/superman_459Wx300H_589104907a0b05.70849485.png",
	"http://pngimg.com/uploads/spider_man/spider_man_PNG29.png",
	"http://moziru.com/images/vector-clipart-batman-2.png"
);
$titles = array(
	"Superman",
	"Spiderman",
	"Batman"
);


for($i=0; $i<count($images); $i++){
echo "<div style='text-align:center;float:left;width:100px;border:1px solid red;margin:10px;'><img width=100 src='{$images[$i]}'/>{$titles[$i]}</div>";
}
