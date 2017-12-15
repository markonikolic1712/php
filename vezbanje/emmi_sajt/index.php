<?php require_once "podaci.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Emmi - naslovna</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.slides.min.js"></script>
  <script>
    $(function() {
      $('#slides').slidesjs({
	   play: {
		   effect: "slide",
		   interval: 5000,
		   auto: true
		   }
      });
    });
  </script>
</head>
<body>
<div class="container">
		<?php include "navigacija.php"; ?>
		 <div class="slides_container img-responsive center-block">
			<div id="slides">
					<div>
						<img src="images/slider1.jpg" alt="">
						<div class="text"><a href="http://www.emmi.rs/televizori-tv-32-led-vivax-tv-32le75t2.11.html?productId=62663">Vivax TV</a></div>
					</div>
					<div>
						<img src="images/slider2.jpg" alt="">
						<div class="text"><a href="http://www.emmi.rs/grafi%C4%8Dke-kartice-(vga)-geforce-gtx1080-zotac-8gb-ddr5.11.html?productId=62030">nVidia GTX</a></div>
					</div>
					<div>
						<img src="images/slider3.jpg" alt="">
						<div class="text"><a href="http://www.emmi.rs/grafi%C4%8Dke-kartice-(vga)-geforce-gtx1060-gigabyte-6gb-ddr5.11.html?productId=61763">GIGABYTE</a></div>
					</div>
					<div>
						<img src="images/slider4.jpg" alt="">
						<div class="text"><a href="http://www.emmi.rs/grafi%C4%8Dke-kartice-(vga)-geforce-gt710-evga-2gb-ddr3.11.html?productId=61053">EVGA</a></div>
					</div>
				</div>
			</div>
		
	<!--main content-->
			<div class="container glavni-sadrzaj">
				<div class="row">
	<!--left sidebar-->
			<div class="col-md-2 col-sm-2 col-xs-2">
				<ul class="nav well">
					<li class="nav-header">Sidebar</li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li class="nav-header">Sidebar</li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li class="nav-header">Sidebar</li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li class="nav-header">Sidebar</li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
					<li><a href="#">link</a></li>
				</ul>
				</div>
	
	<!--middle content-->
	
	<?php
			$parametarPostoji = isset($_GET['ime']);

			$strana = ($parametarPostoji)? $_GET['ime'] : POCETNA;
			switch ($strana) {
					case POCETNA:
						include "moduli/pocetna.php";
						break;
					case GDE_KUPITI:
						include "moduli/gde_kupiti.php";
						break;
					case NACIN_PLACANJA:
						include "moduli/nacin_placanja.php";
						break;
					default:
						include "moduli/pocetna.php";
						break;
				}

	?>

	
	<!--right sidebar-->
			<div class="sidebar-right col-md-2 col-sm-2">
				<div class="well">
					<div class="call-center">
					<h3>0700 300 303</h3>
		        	<p>(samo putem fiskne mreže po ceni lokalnog poziva)</p>
		       	 	<h3>011 65 50 380</h3>
		        	<p>&nbsp;</p>
		        	<h3>*EMMI (*3664)</h3>
		        	<p>za mobilne mreže</p>
		        	<h3>066 890 11 88 </h3>
		        	<p>za mobilne mreže</p>
					</div>
				</div>
				<div class="well">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="well">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				</div>	
	
			</div>
		</div>
	<!--footer-->
	<div class="container footer">
		<div>
	<?php include "moduli/nav_footer.php"; ?>
		</div>
			<div class="footer-text">
				<p>Cene na sajtu su iskazane u dinarima sa uračunatim porezom, a plaćanje se vrsi isključivo u dinarima. Nastojimo da budemo što precizniji u opisu proizvoda, prikazu slika i samih cena, ali ne možemo garantovati da su sve informacije kompletne i bez grešaka. Svi artikli prikazani na sajtu su deo naše ponude i ne podrazumeva da su dostupni u svakom trenutku. Raspoloživost robe i cene možete proveriti pozivanjem neke od naših radnji.</p>
				
			</div>
		
	</div>
</div>	
</body>
</html>



