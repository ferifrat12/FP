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
    <title>Halaman Prestasi</title>
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
          <a class="nav-link active" aria-current="page" href="">Prestasi</a>
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

<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Prestasi</h1>
        <p class="col-md-8 fs-4">Prestasi di SMA karasuno</p>
        <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
      </div>
</div>

<div class="container">
        <!-- Example row of columns -->
        <div class="row">

          <?php
          $q = mysqli_query($conn,"select * from prestasi limit 6 ");
          while ($row = mysqli_fetch_array($q)) {
          ?>
          <div class="row-md-4">
            <h2><?php echo $row[1]; ?></h2>
            <img src="./Admin/upload/prestasi/<?php echo $row['gambar'];?>"height=500px width=750px>
            <p style="font-size: 30px;"><?php echo $row[2]; ?></p>
            <p><a class="btn btn-secondary" href="./Admin/modul/prestasi/view.php?id=<?php echo $row[0] ?>" role="button">View details &raquo;</a></p>
            <br><br><br><br>
          </div>
          <?php } ?>
        </div>
</div> <!-- /container -->


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
    <a style="font-size: 20px;" class="text-light">?? 2022 Copyright By:</a>
    <a style="font-size: 20px;" class="text-light" href="">SMA Karasuno</a>
  </div>
  <!-- Copyright -->
  </body>
</html>