<?php
$conn 	= mysqli_connect("127.0.0.1","root","","g6_zaposleni");
$res 	= mysqli_query($conn,"select * from tanks");
$tank 	= mysqli_fetch_assoc($res);
if($tank){
	echo "<div style='text-align:center;width:200px;height:250px;border:1px solid gray;padding:5px;'>";
	echo "<h2 style='margin:10px;'>Tiger</h2>";
	echo "<img src='{$tank['image']}' width=200 />";
	echo "<div><a href='{$tank['url']}'>Read more</a></div>";
	echo "</div>";
}

