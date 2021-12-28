<?php

session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>PT. SAPTAKENCANA | Contact</title>
  <style>
    body{
      background-color:#B0C4DE;
    }
  </style>
</head>
<body>

<!-- content -->
<div class="container bg-light px-0 pt-2 shadow-lg m-8 bg-body">
<h2>
  <img src="logo.jpg" alt="" width="60" height="48" class="d-inline-block align-text-middle ps-2">
  PT. Saptakencana Kharisma Jaya
</h2>
  
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="keranjang_belanja.php">Keranjang Belanja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Transaksi Pembayaran</a>
        </li>
      </ul>
      <?php $ambil= $koneksi->query("SELECT * FROM pengguna"); ?>
      <?php $pecah= $ambil->fetch_assoc();?>
      <p class="text-light d-inline-block align-text-middle fs-5 mt-3">Hi, <?php echo $pecah['username'];?></p>
      <div class="dropdown pt-1">
        <a class="btn btn-light btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Profile
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="logout.php">Keluar/Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  </nav>

  <!-- isi -->
  <div class="container">
    <div class="row">
      <div class="col-2 bg-dark">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <hr class="bg-secondary" width="100%">
        <li class="nav-item">
          <a class="nav-link text-white" href="about_us.php">About Us</a>
        </li>
        <hr class="bg-secondary" width="100%">
        <li class="nav-item">
          <a class="nav-link text-white" href="contact.php">Contact</a>
        </li>
        <hr class="bg-secondary" width="100%">
      </ul>
      </div>
      <div class="col">
      <h4>Contact</h4>
      <center><img src="logo.jpg" width="10%" class="img-fluid" alt="...">
      <h4 class="text-success">PT. Saptakencana Kharisma Jaya</h4>
      <p>Jl. Cempaka Putih Timur XXIV No.48A, RT.8/RW.3<br>
      Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota<br>
      Jakarta - 10510<br>
      Telp. (021) 4226395<br>
      ext. 4227000</p>
      <p>Inquiry :<br>
        <a href="mailto:sales@saptakencana.com">sales@saptakencana.com</a><br>
        <a href="mailto:edwindo@indo.net.id">edwindo@indo.net.id</a></p>
        <p>Technical Support :<br>
        <a href="mailto:support@saptakencana.com">support@saptakencana.com</a><br>
        </p>
      </div>
    </div>
  </div>

  <!-- footer -->
  <div class="footer py-1" style="background-color:#0c2461">
    <p class="text-light text-end pe-2">Copyright &copy;2021  |  <a href="index.php" class="text-decoration-none text-light"><b>PT. Saptakencana K.J<b><a></p>
  </div>
</div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
</body>
</html>