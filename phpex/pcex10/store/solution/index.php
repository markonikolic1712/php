<?php
require "model.php"; 
if(isset($_GET['id'])){
	$id = $_GET['id']; 
	echo "<a href='./'>Back to main page</a>"; 
	if($id>0) {
		$prev = $id-1;
		echo " <a href='./?id={$prev}'>Previous product</a>";
	}
	if(count($products)-1>$id) {
		$next = $id+1;
		echo " <a href='./?id={$next}'>Next product</a>";
	} 
	$product = $products[$id];
	echo "<h3>{$product['name']}</h3>";
	echo "<p>{$product['description']}</p>"; 
	echo "<h3>Price: {$product['price']}</h3>";
	echo "<img style='max-width:800px;'  src='{$product['image']}' /><br>";
} else {
	$count = 1;
	foreach($products as $k=>$product){ ?>
	<div style='text-align:center; border:1px solid black;padding:4px;margin:5px;width:100px;float:left;height:150px;position:relative;'>
		<img src='<?=$product["image"]?>' width=100 /><br> 
		<div style='bottom:0px;position:absolute;'>Price: <?=$product["price"]?><br><a href='?id=<?=$k?>'>Read more...</a></div>
	</div><?=$count++%3==0?"<div style='clear:both;'></div>":""?>
	<?php }
}

