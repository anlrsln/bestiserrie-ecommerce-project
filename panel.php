<?php

include("baglanti.php");
$sec = "select * from urunler where id > 0";
$sonuc = mysqli_query($baglan,$sec);
?>


<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
</head>



<body>

  <h3>Ürün Ekle</h3>

    <form action="#" method="post">

      <label for="ad">Ad</label>
      <input type="text" id="yemek_ad" name="ad" placeholder="Ad..">

      <label for="fiyat">Fiyat</label>
      <input type="text" id="yemek_fiyat" name="fiyat" placeholder="Fiyat..">

      <label for="resim">Resim</label>
      <input type="text" id="yemek_resim" name="resim" placeholder="Resim..">
      <input type="submit" name="ekle" value="Ekle">
    </form>


    <?php 
      if(isset($_POST["ekle"])){

        // Formdan gelen verileri al
          $name = $_POST['ad'];
          $price = $_POST['fiyat'];
          $image = $_POST['resim'];

          // SQL Sorgusu
          $sql = "INSERT INTO urunler (ad, fiyat, resim) VALUES (?,?,?)";

          $stmt = mysqli_prepare($baglan, $sql);

          // Parametreleri bağla
          $stmt->bind_param("sss",$name, $price, $image);


          if (mysqli_stmt_execute($stmt)) {
            echo "Yeni kayıt başarıyla eklendi.";
          } else {
            echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
          }
      }

    ?>


<h1>Ürünler Tablosu</h1>

<table id="customers">
  <tr>
    <th>Ürün Ad</th>
    <th>Fiyat</th>
    <th>Resim</th>
  </tr>

  <?php 
    session_start();

    if($_SESSION["user"]==""){

      echo "<script>window.location.href='cikis.php'</script>";

    }else{

      if(mysqli_num_rows($sonuc) > 0){
        while($cek=$sonuc->fetch_assoc()){
          echo '
          <form action= "#" method="post">
            <tr>
              <td>'.$cek['ad'].'</td>
              <td>'.$cek['fiyat'].'</td>
              <td>'.$cek['resim'].'</td>
              <td name="id" style="display:none">'.$cek['id'].'</td>
              <td><a href="sil.php?id='.$cek['id'].'">Sil</a> </td>
            </tr>
          </form>
          ';
        }
      }else{
        echo "Veri Bulunamadı.";
      };
      
    }
  ?>



</table>

</body>
</html>



