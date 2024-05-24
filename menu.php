<?php
include("baglanti.php");
$sec = "select * from urunler where id > 0";
$sonuc = mysqli_query($baglan,$sec);
$sepetCount = 0
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="fontawesom/fontawesome-free-6.5.1-web/css/all.min.css"
    />
    <title>Lezzet Durağı</title>
  </head>

  <body>
    <div class="main-content">
      <div class="col-sm-12" id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar-bg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"
              ><big><strong>Bestiserrie</strong></big></a
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
              <div class="icon-cart">
                <svg  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                  <?php
                    // SEPETTE KAÇ ÜRÜN VAR
                    if(isset($_COOKIE['urun'])){
                      $sepetCount = count($_COOKIE['urun']) -1;
                      echo 'Sepetinizde ('.count($_COOKIE['urun']).') ürün bulunuyor';
                    }else{
                      echo 'Sepetiniz Boş';
                    }
                    echo "<span>$sepetCount</span>";
                  ?>
                </svg>
                <a href="?sepetim=true">Sepetimi Göster</a>
                <?php
                if(isset($_GET['sepetim'])){
                  header('location:sepet.php');
                }?>
              
                <a href="?bosalt=true">Sepeti Boşalt</a>
                <?php
                //SEPETİ BOŞALT
                if(isset($_GET['bosalt'])){
                  foreach($_COOKIE['urun'] as $key=> $val){
                    setcookie('urun['.$key.']',$key,time() - 86400);
                    header('location:'.$_SERVER['HTTP_REFERER']);
                  }
                }
                ?>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="content">
        <h2>Lezzet Dolu Tatlar</h2>
        <p>Ağızınızı Şımartacak Lezzetler Burada Sizi Bekliyor!</p>
        <a class="btn btn-outline-dark" href="menu.php" role="button"
          >Menüye Bak</a
        >
      </div>
    </div>
    <div class="container">
      <h2 class="mt-5" id="menu">MENÜMÜZ</h2>
      <div class="row mt-4">
        <?php
        ob_start();
        //ÜRÜN LİSTELEME
          if($sonuc->num_rows>0){
            while($cek=$sonuc->fetch_assoc()){
              echo '<div class="col-sm-6">';
                echo '<div class="card mb-3 shadow p-3 mb-5 bg-body rounded">';
                echo '<div class="row g-0">';
                echo '<div class="col-md-4">';
                echo '<img src="' . $cek["resim"] . '" class="img-fluid rounded-start" alt="' . $cek["ad"] . '">';
                echo '</div>';
                echo '<div class="col-md-8">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $cek["ad"] . '</h5>';
                echo '<p class="card-text">' . $cek["fiyat"] . ' TL / Adet</p>';
                echo '<input type="hidden" name="product_id" value="' . $cek["id"] . '">';
                echo '<button type="submit" class="btn btn-primary"><a class="text-white" href="?ekle='. $cek["id"].'">Sepete Ekle</a></button>';
                //echo '<a href="?ekle='. $cek["id"].'">Sepete Ekle</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
          }

          // ÜRÜN EKLEME
          if(isset($_GET['ekle'])){
            $id = $_GET['ekle'];
            setcookie('urun['.$id.']',$id,time()+ 86400);
            header('location:'.$_SERVER['HTTP_REFERER']);
          }
          ob_end_flush();
        ?>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-2">&copy; 2017-2024 LEZZET DURAĞI</p>
      <a href="#" class="text-dark"><i class="fa-brands fa-instagram"></i></a>
      <a href="#" class="text-dark"
        ><i class="fa-brands fa-x-twitter ml-2"></i
      ></a>
      <a href="#" class="text-dark"
        ><i class="fa-brands fa-facebook ml-2"></i
      ></a>
      <a href="#" class="text-dark"
        ><i class="fa-brands fa-youtube ml-2"></i
      ></a>
      <ul class="list-inline mt-2">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
    <script src="custom.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  </body>
</html>
