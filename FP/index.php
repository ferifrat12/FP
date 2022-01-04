<?php

include 'admin/config/db_conn.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Admin/assets/css/bootstrap.css">
    <title>Halaman Utama</title>
  </head>
  <body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark fw-bold fs-5"style="background-color: #FF87CA;">
  <div class="container-fluid">
  
  <a class="navbar-brand ml-2 " href="./index.php">
      <img src="Admin/assets/logo.png" alt="" width="85" height="85" class="ml-4">
      <p class="fw-bold">SMA Karasuno</p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <form class="d-flex ">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 position-absolute bottom-50 end-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./profil.php">Profil</a>
        </li>
        <li>          
          <a class="nav-link active" aria-current="page" href="./berita.php">Berita</a>
        </li>
        <li class="dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Akademic
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./ekskul.php">Extrakurikuler</a></li>
            <li><a class="dropdown-item" href="./kalender.php">Kalender</a></li>
          </ul>
        </li>
        <li>
          <a class="nav-link active" aria-current="page" href="./prestasi.php">Prestasi</a>
        </li>
        <li>          
          <a class="nav-link active" aria-current="page" href="./gallery.php">Gallery</a>
        </li>
        <li>
          <a class="nav-link active" aria-current="page" href="./kontak.php">Kontak</a>
        </li>
        <li>
          <a class="nav-link active mr-4" aria-current="page" href="./Admin/index.php">Login Admin</a>
        </li>
      </ul>
        
      </form>
    </div>
  </div>
</nav>
    </div>
  

<!-- <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Halo ini adalah halaman berita</h1>
        <p class="col-md-8 fs-4">Artikel ini asli buatan anak SMA karasuno</p>
         <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>
</div> -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Admin/assets/SMA2.jpg" height="750" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2 data-animate="fadeInUp" style="background: rgba(0, 0, 0, 0.6);" class="fadeInUp animated">SMA KARASUNO</h2>
      <p class="d-none d-sm-block fadeInUp animated" data-animate="fadeInUp" data-delay="200" style="background: rgba(0, 0, 0, 0.6);">WE ARE THE LEADER</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Admin/assets/EksBasket.jpg" height="750" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2 data-animate="fadeInUp" style="background: rgba(0, 0, 0, 0.6);" class="fadeInUp animated">SMA KARASUNO</h2>
      <p class="d-none d-sm-block fadeInUp animated" data-animate="fadeInUp" data-delay="200" style="background: rgba(0, 0, 0, 0.6);">WE ARE THE LEADER</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Admin/assets/back.jpg" height="750" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2 data-animate="fadeInUp" style="background: rgba(0, 0, 0, 0.6);" class="fadeInUp animated">SMA KARASUNO</h2>
      <p class="d-none d-sm-block fadeInUp animated" data-animate="fadeInUp" data-delay="200" style="background: rgba(0, 0, 0, 0.6);">WE ARE THE LEADER</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div id="carouselExampleControls" style="margin-top: 100px;" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="foto/bp3.png" class="d-block w-100" width="100%" alt="...">
        </div>
        <div class="carousel-item">
          <img src="foto/VO4jJiY.png" class="d-block w-100" width="100%"  alt="...">
        </div>
        <div class="carousel-item">
          <img src="foto/bts-desktop-nawpic-16-scaled.jpg" class="d-block w-100" width="100%" alt="...">
            alt="...">
        </div>
        <div class="carousel-item">
          <img src="foto/c5a16e3a8354af2739a151ba71577574.jpg" class="d-block w-100" width="100%" alt="...">
            alt="">
        </div>
        <div class="carousel-item">
          <img src="foto/ikon.png" class="d-block w-100" width="100%" alt="">
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
<div class="container-fluid py-5">
<div class="row">
    <div class="row">
    <h1 align="center">FASILITAS</h1>
    </div>
    <div class="col">
    <img src="admin/assets/Kolamrenang.jpg" alt="" width="550px">
    <h1>Kolam Renang</h1>
    </div>
    <div class="col">
    <img src="admin/assets/gym.jpeg" alt="" width="600px" height="390px">
    <h1>Gym</h1>
    </div>
    <div class="col">
    <img src="admin/assets/LapanganVolly.jpg" alt="" width="600px" height="390px">
    <h1>Lapangan Volly</h1>
    </div>
  </div> <br><br><br><br><br><br><br>

  <div class="row">
    <div class="col">
    <img src="admin/assets/LOGO.jpg" alt="" width="550px">
    </div>
    <div class="col">
    <h3 style="font-size: 40px;"><span style="color: #F68D10;">Sambutan</span> KEPSEK.</h3>
    <h3 class="t300 ls4 lowercase" style="font-size: 25px; color: #999;">SMA Karasuno</h3> <br> <br>
    <p><span style="font-size:11pt"><span style="background-color:white"><span style="font-family:Calibri,sans-serif"><strong><span style="font-size:20pt"><span style="color:#333333">Kata Sambutan</span></span></strong></span></span></span></p>
    <p><br>
    <span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><u><span style="font-size:20pt"><span style="color:#333333">Sambutan Kepala Sekolah</span></span></u><span style="font-size:20pt"><span style="color:#333333">&nbsp;<br>
    Selamat Datang</span></span></span></span></p>
    </div>
  </div>
</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #FF87CA;">
    <a style="font-size: 20px;" class="text-light">© 2022 Copyright By:</a>
    <a style="font-size: 20px;" class="text-light" href="">SMA Karasuno</a>
  </div>
  <!-- Copyright -->
</footer>
  </body>
</html>