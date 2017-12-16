<?php

require "model.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	echo $id;
	$proizvod = $products[$id];

	$next = $id == count($products)-1 ? 0 : $id+1;
	$previous = $id == 0 ? count($products)-1 : $id-1;
	echo "<div>
			<div style='float:left'><a href='./'>Back to main page</a>&nbsp;&nbsp;&nbsp;</div>
			<div style='float:left'><a href='?id={$previous}'>Previous product</a>&nbsp;&nbsp;&nbsp;</div>
			<div style='float:left'><a href='?id={$next}'>Next product</a></div>
			<div style='clear:both'></div>		
			<h3>{$proizvod['name']}</h3>
			<img src='{$products[$id]['image']}'>
			<p>{$products[$id]['price']}</p>
			<p>{$products[$id]['description']}</p>
		</div>";
} else {
	$brojac = 0;
	foreach($products as $k => $proizvod){ ?>
		<div style='text-align:center; border:1px solid black;padding:4px;margin:5px;width:100px;float:left;height:150px;position:relative;'>
			<div style="clear:both;"></div>
			<img src='<?=$proizvod['image']?>' width=100 /><br>
			<div style='bottom:0px;position:absolute;'>Price: <?=$proizvod['price']?><br>
			<a href='?id=<?=$brojac?>'>Read more...</a></div>
		</div>
		<?php 
		$brojac++;
		echo ($brojac%3==0) ? "<div style='clear: both;'></div>" : "";
	}
}

