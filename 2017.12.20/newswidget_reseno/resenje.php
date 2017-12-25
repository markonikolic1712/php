<?php
$conn = mysqli_connect('localhost','root','','g6_zaposleni');
$res = mysqli_query($conn, "select * from news");

$nizId = [];
while($arr = mysqli_fetch_assoc($res)){
		$nizId[] = $arr['id'];
	}
shuffle($nizId);

$vestred = [];
echo "<div style='width:200px;border:1px solid blue;'>";
foreach ($nizId as $key => $value) {
	$vestred = mysqli_query($conn,"select * from news where id='{$value}'");
	$vest = mysqli_fetch_assoc($vestred);
	$content = substr($vest['content'], 0,200)."...";
	echo "<div style='border:1px solid red;padding:4px;margin:4px;'><h3 style='margin:10px;'>{$vest['title']}</h3><p>{$content}</p></div>";
}
echo "</div>";