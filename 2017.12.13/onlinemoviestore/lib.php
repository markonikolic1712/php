<?php
require_once "model.php";


function vreme(){
	echo date("Y M H:i:s");
}

function categories($cats){
	$output = "";
	foreach($cats as $k=>$cat){
		$output .= "<dd><a href='?cat={$k}'>{$cat}</a></dd>";
	}
	return $output;
}



function movies($cat=-1, $movies) {
	$trazenaKatergorija = $cat;
	$brojac = 1;
	foreach($movies as $movie){
		if($movie['cat']!=$trazenaKatergorija&&$trazenaKatergorija!=-1){
			continue;
		}
		?>
		 <div class="<?=($brojac%2==0)?'rightbox':'leftbox' ?>">
          <h3><?=$movie['titles']?></h3>
          <img src="<?=$movie['images']?>" width="93" height="95" alt="photo 1" class="left" />
          <p><b>Price:</b> <b><?=$movie['price']?></b> &amp; eligible for FREE Super Saver Shipping on orders over <b>$195</b>.</p>
          <p><b>Availability:</b> Usually ships within 24 hours</p>
          <p class="readmore"><a href="http://www.free-css.com/">BUY <b>NOW</b></a></p>
          <div class="clear"></div>
        </div>
       	<?php
	}
}
