<?php

include("baglanti.php");
$sec = "select * from urunler where id > 0";
$sonuc = mysqli_query($baglan,$sec);
$sepetCount = 0;
$sepetToplamFiyat=0;
error_reporting(E_ERROR | E_PARSE);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/custom.css"/>
    <title>Sepetim</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" id="navbar-bg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"
              ><big><strong>Lezzet Durağı</strong></big></a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="index.php"
                    ><strong>Ana Sayfa</strong></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="menu.php"
                    ><strong>Menü</strong></a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    href="aboutus.php"
                    tabindex="-1"
                    aria-disabled="true"
                    ><strong>Hakkımızda</strong></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>

    <hr>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <th class="text-center">Ürün Resmi</th>
                    <th class="text-center">Ürün Adı</th>
                    <th class="text-center">Ürün Fiyatı</th>
                    <th class="text-center">Sepetten Çıkar </th>

                </thead>
                <tbody>
                <?php
                ob_start();
                  $first = true;
                  if(!is_null($_COOKIE['urun'])){
                    $sepetCount = count($_COOKIE['urun']) - 1;
                    foreach($_COOKIE['urun'] as $urun => $val){
                      $sec = "select * from urunler where id=$val";
                      $sonuc = mysqli_query($baglan,$sec);
                      if ($first) {
                        $first = false;
                        continue; 
                      }
                      if($sonuc->num_rows>0){
                        $cek=$sonuc->fetch_assoc();
                             echo '<tr>';
                             echo   '<td class="text-center">';
                             echo      '<img src="'. $cek["resim"] . '" alt="" width="50" height="50">';
                             echo    '</td>';
                             echo   '<td class="text-center">' . $cek["ad"] . '</td>';
                             echo   '<td class="text-center">' . $cek["fiyat"] . ' TL</td>';
                             echo   '<td class="text-center">';
                             echo       '<a href="?cikart='. $cek["id"].'" class="btn btn-sm btn-danger">Sepetten Çıkar</a>';
                             echo   '</td>';
                             echo '</tr>';
                      }
                      $sepetToplamFiyat += $cek["fiyat"];
                    }
                  }else{
                    echo ' <div class="container">
                            <h2 class="text-center"><strong class="text-danger">Sepetiniz Boş</strong></h2>
                          </div>';
                  }

                  // SEPETTEN ÜRÜN ÇIKART
                  if(isset($_GET['cikart'])){
                  $id = $_GET['cikart'];
                  setcookie('urun['.$id.']',$id,time() - 86400);
                  header('location:'.$_SERVER['HTTP_REFERER']);
                }
                ob_end_flush();
                ?>     
                </tbody>
                  
                <tfoot  >
                  <th colspan="1" class="text-danger">Toplam Adet: <?php echo $sepetCount;?></th>
                  <th colspan="3" class="text-danger text-right">Toplam: <?php echo $sepetToplamFiyat;?> TL</th>
                </tfoot>
            </table>
        </div>
    </div>





</body>
</html>