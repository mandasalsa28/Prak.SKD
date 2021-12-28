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

  <title>PT. SAPTAKENCANA | About Us</title>
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
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header"><b>PT. Saptakencana K.J</b></div>
        <div class="card-body text-dark">
          <p class="card-text"><i>Telp</i> : (021) 4226395<br>
          <i>Fax</i> : 4227000</p>
          <p><i>Sales</i> :<br>
          <a href="mailto:sales@saptakencana.com">sales@saptakencana.com</a><br>
          <i>Tech</i> :<br>
          <a href="mailto:support@saptakencana.com">support@saptakencana.com</a></p>
        </div>
      </div>
      </div>
      <div class="col">
        <h4>About US</h4>
        <p style="text-align:justify">Keahlian dan pengalaman kami dalam Deteksi Kebakaran, Sistem Manajemen Fasilitas, 
        Jaringan Fiber Optic, Telepon Audio dan Video, Kontrol HVAC, Pengukuran Daya, Sistem Penagihan, Sistem CCTV, 
        Kontrol Akses dan Keamanan. Semua sistem dan produk berasal dari produsen terkemuka di pasar. Dengan insinyur 
        profesional yang sangat termotivasi, kami menjamin setiap proyek yang dilakukan akan diselesaikan untuk kepuasan 
        setiap pelanggan! Jaminan kualitas pekerjaan inilah yang dikelola secara profesional oleh PT.SAPTAKENCANA KHARISMA 
        JAYA yang memungkinkan kami tumbuh dan kami berharap dapat menawarkan integritas tingkat tinggi yang sama untuk proyek Anda.
        </p>
        <center><img src="logo2.jpg" width="800" height="500" class="d-inline-block align-text-middle pb-4" alt="..."></center>
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