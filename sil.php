<?php 

include "baglanti.php";

$silinecekID = $_GET["id"];
$sql = "DELETE from  urunler where id=$silinecekID";
$sonuc = mysqli_query($baglan,$sql);

if($sonuc>0){
	header("location:panel.php");
}else{
	echo "sorun oluştu";
}


?>