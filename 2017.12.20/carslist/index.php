<?php
$conn = mysqli_connect("127.0.0.1","root","","cars");
$cats = mysqli_query($conn,"select distinct manu from cars");

echo "<select onchange='if(this.value==-1)return;window.location=\"?cat=\"+this.value'>";
echo "<option value='-1'>Select category:</option>"; 
foreach($cats as $cat){
	$isSelected = isset($_GET['cat']) && $_GET['cat'] == $cat['manu'];
	echo "<option ".($isSelected?"selected":"")." >{$cat['manu']}</option>"; 
}
echo "</select>";

if(isset($_GET['cat'])){
	$cars = mysqli_query($conn,"select * from cars where manu = '{$_GET['cat']}'");
	foreach($cars as $car){
		echo "<div style='border:1px solid red;padding:4px;margin:4px;'>";
		echo "<h3 style='margin:4px;'>" . $car['model'] . "</h3>";
		echo "<img width=200 src='" . $car['image'] . "' /><br>";
		echo "<strong>Price: </strong>" . $car['price'];
		echo "</div>";
	}
}
