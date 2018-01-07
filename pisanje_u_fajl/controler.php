<?php
$extenzije = ["txt","doc","docx"];


$ext = isset($_GET['ext'])?$_GET['ext']:"txt";
$text = isset($_GET['text'])?$_GET['text']:"";
if(isset($_GET['ime'])){
		$ime = $_GET['ime'];
		$fajl =  $ime.".".$ext;
		$noviFajl = fopen("fajlovi/{$fajl}","a+");
		fwrite($noviFajl, $text."\n");
		fclose($noviFajl);
	} else {
//		echo "<p style='color: red; font-weight:bold;'>Morate uneti ime fajla.</p>";
		$ime = "";
	}


// KONEKCIJA
$conn = mysqli_connect("localhost","root","","pisanje_u_fajl");
$res = mysqli_query($conn, 'select * from fajlovi');
$izlaz = mysqli_fetch_object($res);
$totalRows = mysqli_num_rows($res);


// PISANJE U POLJA U BAZI
if(strlen($ime) == 0){
		echo "<p style='color: red; font-weight:bold;'>Morate uneti ime fajla.</p>"; 
	} else {
		$unos = mysqli_query($conn, "insert into fajlovi (ime, ekstenzija, sadrzaj) values ('{$ime}', '{$ext}', '{$text}')");
		$obavestenje = "Uspesno je izvrsen upis u bazu.";
	}


// PRIKAZ I BRISANJE ODABRANIH FAJLOVA
if(isset($_GET['prikazi'])){
		$trazeniRed = mysqli_query($conn, "select * from fajlovi where ime = '{$_GET['trazeniFajl']}'");
		$tF = mysqli_fetch_object($trazeniRed);
		$prikazObavestenje = "U fajlu {$tF->ime}.{$tF->ekstenzija}  upisan je sledeci sadrzaj:<br>{$tF->sadrzaj}";
	} elseif(isset($_GET['obrisi'])){
		$trazeniRed = mysqli_query($conn, "select * from fajlovi where ime = '{$_GET['trazeniFajl']}'");
		$tF = mysqli_fetch_object($trazeniRed);
		$brisanje = mysqli_query($conn, "delete from fajlovi where ime = '{$_GET['trazeniFajl']}' limit 1");
		$prikazObavestenje = ($brisanje==1)? "Fajl {$tF->ime}.{$tF->ekstenzija} je uklonjen iz baze." : "";
		unlink("fajlovi/{$tF->ime}.{$tF->ekstenzija}");
	} else {
		$prikazObavestenje = "";
	}





