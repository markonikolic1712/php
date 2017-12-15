<?php
require "model.php";
?>
<ul>
<?php
foreach($model as $kljuc => $naslov) {?>
	<li><a href="?id=<?=$kljuc?>"><?=$naslov["menu"]?></a></li>
<?php
}
?>
</ul>
<?php
$trazenaVest = $model[$_GET['id']];
?>
<h3><?=$trazenaVest['naslov']?></h3>
<p><?=$trazenaVest['sadrzaj']?></p>











