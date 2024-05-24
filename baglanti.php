<?php


$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre="";
$vt_adi="ürünler";


try{
	//$baglan = new PDO("mysql:host=localhost; dbname=ürünler;charset=utf8","root","");
	$baglan = mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);
}catch(PDOException $e){
	echo $e-> getMessage();
}

?>