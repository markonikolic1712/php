<?php
$category = isset($_GET['cid'])&&is_numeric($_GET['cid'])?$_GET['cid']:0;
$q = mysqli_query($conn, "select * from movies where category = $category");
$i=1;
while($rw=mysqli_fetch_object($q)){
		$i++;
?>
        <div class="<?php echo ($i+1)%2==0 ? "rightbox":"leftbox"; ?>">
          <h3><?php echo $rw->title; ?></h3>
          <img src="images/<?php echo $rw->image; ?>" width="93" height="95" alt="photo 1" class="left" />
          <p><b>Price:</b> <b>$<?php echo $rw->price; ?></b> &amp; eligible for FREE Super Saver Shipping on orders over <b>$195</b>.</p>
          <?php if($rw->supersaver){ ?>
          <p><b>Availability:</b> Usually ships within 24 hours</p>
			<?php } ?>
          <p class="readmore"><a href="http://www.free-css.com/">BUY <b>NOW</b></a></p>
          <div class="clear"></div>
        </div>
<?php
}
?>
        <div class="clear"></div>
<?php