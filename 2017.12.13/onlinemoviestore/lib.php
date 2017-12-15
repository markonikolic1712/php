<?php

function vreme(){
	echo date("Y M H:i:s");
}

function categories(){
	$cats = [
		"Action &amp; Adventure",
		"Anime and manga",
		"Drama",
		"Horor",
		"Science fiction"
	];
	foreach($cats as $k=>$cat){
		echo "<dd><a href='?cat={$k}'>{$cat}</a></dd>";
	}
}

/*function movies($cat) {
	$movies = [
		[
			"titles" = "",
			"images" = "",
			"price" = "",
			"cat" = 4
		],
		[
			"titles" = "",
			"images" = "",
			"price" = "",
			"cat" = 4
		],
		[
			"titles" = "",
			"images" = "",
			"price" = "",
			"cat" = 4
		],
		[
			"titles" = "",
			"images" = "",
			"price" = "",
			"cat" = 4
		]
	]
}*/