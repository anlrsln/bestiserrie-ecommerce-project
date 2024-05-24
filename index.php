
<?php
  include("baglanti.php");
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
    <link rel="stylesheet" href="style.css"/>
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
    <title>Bestiserrie</title>
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
      <h2 class="mt-5">ÖNERİLEN ÜRÜNLERİMİZ</h2>
      <div class="row mt-4">
        <div class="col-sm-4" id="pic">
          <div class="card shadow p-3 mb-5 bg-body rounded" id="zoom">
            <img
              src="https://www.uzaypastanesi.com/images/product/UZAY-22%C5%9EUBAT23-23089_1_OgHe.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Beberoski Muzlu Tek Pasta</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-4" id="pic">
          <div class="card shadow p-3 mb-5 bg-body rounded" id="zoom">
            <img
              src="https://www.uzaypastanesi.com/images/product/UZAY-22%C5%9EUBAT23-23073_2eKR.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Bavyera Pasta</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-4" id="pic">
          <div class="card shadow p-3 mb-5 bg-body rounded" id="zoom">
            <img
              src="https://www.uzaypastanesi.com/images/product/F%C4%B0RUZE%201_6wIa.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Firuze Pasta</h5>
            </div>
          </div>
        </div>
      </div>
      <h2 class="mt-5">BİZE ULAŞIN</h2>
      <div class="row mt-4">
        <div class="col-sm-4">
          <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
              <h5 class="card-title text-center">
                <i class="fa-solid fa-location-dot"></i>
              </h5>
              <p class="card-text text-center">
                Çukurova Üniversitesi SARIÇAM/ADANA
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
              <h5 class="card-title text-center">
                <i class="fa-solid fa-envelope"></i>
              </h5>
              <p class="card-text text-center">
                2020556456@ogr.cu.edu.tr veya<br />
                2018556019@ogr.cu.edu.tr
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
              <h5 class="card-title text-center">
                <i class="fa-solid fa-phone"></i>
              </h5>
              <p class="card-text text-center">
                Tel: 	0322 338 61 50 <br />
                Fax: 	0322 338 61 50
              </p>
            </div>
          </div>
        </div>
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
        <li class="privacy list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
    <script src="custom.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
