<?php 
$newsModel = [
	["title"=>"City's late show denies Hammers","text"=>"Man City produced another late show to equal the Premier League record of 13 successive wins in a season with a 2-1 win over West Ham."],
	["title"=>"La Liga: Ten-man Getafe stun Valencia","text"=>"Markel Bergara fired 10-man Getafe to a shock victory over second-placed Valencia to leave Barcelona five points clear at the top."],
	["title"=>"Beckham warning for England","text"=>"David Beckham believes there will be no easy games for England in the World Cup despite their apparent good draw."]
];

function vest($arr){
	$i = rand(0,count($arr)-1);
	$vest = $arr[$i];
	echo "<div style='border: 1px solid red; padding:0 30px;float:left;'>
			<h2>{$arr[$i]['title']}</h2>
			<p>{$arr[$i]['text']}</p>
		</div>";
}


vest($newsModel);
