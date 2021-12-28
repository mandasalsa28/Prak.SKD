<?php

session_start();


require 'functions.php';

$koneksi= new mysqli("localhost","root","","saptakencana");
if(empty($_SESSION['keranjang_belanja'])){
  echo "
  <script>
    alert('Keranja Belanja masih kosong, Beli barang terlebih dahulu!');
  </script>";
  echo "
  <script>
    location='dashboard.php';
  </script>";
}

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
      <h3 class="pt-2 px-2">Keranjang Belanja</h3>
        <div class="row px-5 pb-3">
          <div class="col-10">

        <table class="table pt-2">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah Beli</th>
                <th scope="col">Total Harga</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php $nomor=1; ?>
              <?php foreach ($_SESSION["keranjang_belanja"] as $id_produk => $jumlah): ?>
              <?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
              $pecah= $ambil->fetch_assoc();
              ?>
              <tr>
                <th scope="row"><?php echo $nomor; ?></th>
                <td><?php echo $pecah['nama_produk']; ?></td>
                <td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
                <td><?php echo $jumlah ?></td>
                <td>Rp. <?php echo number_format($pecah['harga_produk']*$jumlah); ?></td>
                <td>                
                  <a href="hapus_barangbelanja.php?id=<?php echo $id_produk ?>" 
                    class="btn btn-outline-danger">Hapus</a>
                    </td>
              </tr>
              <?php $nomor++; ?>
              <?php endforeach ?>
              
            </tbody>
        </table>
        <a href="" class="btn btn-secondary">Checkout >></a>
          </div>
        </div>
    </div>
  </section>

      

  <!-- footer -->
  <div class="footer py-1" style="background-color:#0c2461">
    <p class="text-light text-end pe-2">Copyright &copy;2021  |  <a href="index.php" class="text-decoration-none text-light"><b>PT. Saptakencana K.J<b><a></p>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
</body>
</html>