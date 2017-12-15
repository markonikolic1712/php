<?php
$players = array(
	array("name"=>"Peter",	"hero"=>"akali",	"position"=>"right",	"lane"=>"mid"),
	array("name"=>"Sally",	"hero"=>"fiddlesticks",	"position"=>"left",	"lane"=>"top"),
	array("name"=>"John",	"hero"=>"nautilus",	"position"=>"left",	"lane"=>"bot"),
	array("name"=>"Jessie",	"hero"=>"gankplank",	"position"=>"right",	"lane"=>"top"),
	array("name"=>"Charlie","hero"=>"xin",		"position"=>"right",	"lane"=>"bot"),
	array("name"=>"Robert",	"hero"=>"ahri",		"position"=>"left",	"lane"=>"mid")
);     
$html = "<img width=800 src='map.png' style='opacity:0.8' />";
for($i=0,$c=count($players);$i<$c;$i++){
	$player = $players[$i];
	$rolePosition 		= $rolePositions[$player["position"]][$player["lane"]]; 
	$heroTilePosition 	= $heroSpritePositions[$player["hero"]];
	$backgroundPosition = "background-position: {$heroTilePosition[0]}px {$heroTilePosition[1]}px";
	$html.="<div style='{$backgroundPosition}; background-image: url(heroes.png); background-color:red;position:absolute;left:{$rolePosition[0]}px;top:{$rolePosition[1]}px;width:54px;height:54px;border:1px solid yellow;'></div>";
	$posAndOffset = $rolePosition[1]+52;
	$html.="<div style='font-size:1.6em;color:black;position:absolute;left:{$rolePosition[0]}px;top:{$posAndOffset}px;'>{$player['name']}</div>";
}