<?php

session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

$koneksi= new mysqli("localhost","root","","saptakencana");

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>PT. SAPTAKENCANA | Dashboard</title>
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
      <p class="text-light d-inline-block align-text-middle mt-3 fs-5">Hi, <?php echo $pecah['username'];?></p>
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
  <section class="konten">
    <div class="container px-0">
      <h3 class="pt-2 px-2">Products</h3>
        <div class="row">

            <?php $ambil= $koneksi->query("SELECT * FROM produk"); ?>
            <?php while($perproduk= $ambil->fetch_assoc()){ ?>
          <div class="col px-5 py-2">
            <div class="thumbnail py-2">
              <img src="./foto_produk/<?php echo $perproduk['foto_produk'];?>" width="300" height="220" alt="...">
              <div class="caption">
                <h5><?php echo $perproduk['nama_produk'];?></h5>
                <p>Rp. <?php echo number_format($perproduk['harga_produk']);?></p>
                <a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>
            <?php } ?>

        </div>
    </div>
  </section>

      <!--<div class="col">
      <form class="d-flex py-2">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <div class="card text-white bg-dark mb-3 position-relative top-50 start-50 translate-middle" style="max-width: 18rem;">
        <div class="card-header"><b>PT. Saptakencana K.J</b></div>
        <div class="card-body">
          <p class="card-text"><i>Telp</i> : (021) 4226395<br>
          <i>Fax</i> : 4227000</p>
          <p><i>Sales</i> :<br>
          <a href="mailto:sales@saptakencana.com">sales@saptakencana.com</a><br>
          <i>Tech</i> :<br>
          <a href="mailto:support@saptakencana.com">support@saptakencana.com</a></p>
        </div>
      </div>
      </div>
    </div>
  </div> -->

  <!-- footer -->
  <div class="footer py-1" style="background-color:#0c2461">
    <p class="text-light text-end pe-2">Copyright &copy;2021  |  <a href="index.php" class="text-decoration-none text-light"><b>PT. Saptakencana K.J<b><a></p>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
</body>
</html>