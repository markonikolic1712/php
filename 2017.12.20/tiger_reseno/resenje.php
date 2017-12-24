<?php
$conn = mysqli_connect('localhost','root','','g6_zaposleni');
$res = mysqli_query($conn, "select * from tanks");
$red = mysqli_fetch_assoc($res);

// $ime = $red['title'];
// $slika = $red['image'];
// $link = $red['url'];


?>
<div style='textalign:center;width:200px;height:250px;border:1px solid
gray;padding:5px;'>
<h2 style='margin:10px;'><?=$red['title']?></h2>
<img src="<?=$red['image']?>" width=200 />
<div>
<a href='<?=$red['url'];?>'>Read more</a>
</div>
</div>