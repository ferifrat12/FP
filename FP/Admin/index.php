<?php 
session_start();
include('config/db_conn.php');
if (isset($_SESSION['username'])) {
?>

<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Admin/assets/css/bootstrap.css">
  <title>Admin</title> 
</head> 
<body> 

<nav class="navbar navbar-expand-lg navbar-dark fw-bold "style="background-color: #FF87CA;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-link active">
        <a class="nav-link active" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-link active">
        <a class="nav-link active" href="?menu=admin">Admin</a>
      </li>
      <li class="nav-link active">
        <a class="nav-link active" href="?menu=artikel">Artikel</a>
      </li>
      <li class="nav-link active">
        <a class="nav-link active" href="?menu=gallery">Gallery</a>
      </li>
      <li class="nav-link active">
        <a class="nav-link active" href="../index.php">Kembali Ke webset</a>
      </li>
      <li class="nav-link active">
      <a href="config/logout.php" class="btn btn-outline-success mr-4">Logout</a>
      </li>

    </ul>
   
   
  </div>
</nav>
<br/>
<br/>

<div class="module_content">
  <div class="module_content">
    <div align="center">
      <?php include "config/content.php"; ?>
    </div>
  </div>
</div>
     
<hr>
 
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>
</body> 
</html>

<?php
} else {
  header("location:config/login.php");
}
?>