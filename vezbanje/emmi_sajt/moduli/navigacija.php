<?php
	require_once "../podaci.php";
?>
<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">emmi</a>
				</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="?ime=<?=POCETNA?>">Početna</a></li>
						<li><a href="?ime=<?=$strana =GDE_KUPITI?>">Gde kupiti</a></li>
						<li><a href="?ime=<?=NACIN_PLACANJA?>">Način plaćanja</a></li>
					</ul>
					<div class="nav navbar-nav pull-right">
						<li><a href="#">Register</a></li>
					</div>
			</div>
		</nav>
		
