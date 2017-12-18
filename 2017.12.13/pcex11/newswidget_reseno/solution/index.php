<?php 
$newsModel = [
	["title"=>"City's late show denies Hammers","text"=>"Man City produced another late show to equal the Premier League record of 13 successive wins in a season with a 2-1 win over West Ham."],
	["title"=>"La Liga: Ten-man Getafe stun Valencia","text"=>"Markel Bergara fired 10-man Getafe to a shock victory over second-placed Valencia to leave Barcelona five points clear at the top."],
	["title"=>"Beckham warning for England","text"=>"David Beckham believes there will be no easy games for England in the World Cup despite their apparent good draw."]
];

function showWidget($model){ 
	$index = mt_rand(0,count($model)-1);
	$model = $model[$index];
	echo "<div style='border:1px solid red;padding:4px;margin:4px;'><h3>{$model['title']}</h3><p>{$model['text']}</p></div>";
}

showWidget($newsModel);