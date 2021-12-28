<?php

session_start();

if(!isset($_SESSION["login_admin"])){
    header("Location: login_admin.php");
    exit;
}

require 'functions.php';

$koneksi = new mysqli("localhost", "root",  "", "saptakencana");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>PT. SAPTAKENCANA K.J | Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand ps-2" href="#"><h2>PT. SAPTAKENCANA K.J</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            
            <?php $ambil= $koneksi->query("SELECT * FROM tb_admin ORDER BY id_admin DESC"); ?>
            <?php $pecah= $ambil->fetch_assoc();?>
            <p class="text-light d-inline-block align-text-middle fs-5 mt-3">Hi, <?php echo $pecah['username'];?></p>
            <!-- <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle pe-5" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Keluar/Logout</a></li>
                    </ul>
                </li>
            </ul> -->
            
        </div>
    </nav>

    <!-- isi -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-dark">
                <ul class="nav flex-column">
                <img src="..." class="rounded mx-auto d-block pt-2" alt="...">
                    <hr width="100%" class="bg-secondary">
                    <li class="nav-item">
                        
                        <a class="nav-link text-light" aria-current="page" href="dashboard_admin.php">
                        <img src="./logo/home.jpg" alt="" width="20" height="20" class="d-inline-block align-text-middle">
                        Dashboard
                        </a>
                    </li>
                    <hr width="100%" class="bg-secondary">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="dashboard_admin.php?halaman=#">Profile</a>
                    </li>
                    <hr width="100%" class="bg-secondary">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="dashboard_admin.php?halaman=produk">Data Produk</a>
                    </li>
                    <hr width="100%" class="bg-secondary">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="dashboard_admin.php?halaman=pembelian">Pembelian Produk</a>
                    </li>
                    <hr width="100%" class="bg-secondary">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="dashboard_admin.php?halaman=pengguna">Pengguna/User</a>
                    </li>
                    <hr width="100%" class="bg-secondary">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout_admin.php">Logout</a>
                    </li>
                    <hr width="100%" class="bg-secondary">
                </ul>
            </div>
            <div class="col px-5">
                <?php
                if (isset($_GET['halaman'])){
                    if ($_GET['halaman']=="produk"){
                        include 'produk.php';
                    }
                    elseif ($_GET['halaman']=="pembelian"){
                        include 'pembelian.php';
                    }
                    elseif ($_GET['halaman']=="pengguna"){
                        include 'pengguna.php';
                    }
                    elseif ($_GET['halaman']=="detail"){
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="tambahproduk"){
                        include 'tambahproduk.php';
                    }
                    elseif ($_GET['halaman']=="hapusproduk"){
                        include 'hapusproduk.php';
                    }
                    elseif ($_GET['halaman']=="ubahproduk"){
                        include 'ubahproduk.php';
                    }
                    elseif ($_GET['halaman']=="hapuspengguna"){
                        include 'hapuspengguna.php';
                    }
                }else{
                    include 'home.php';
                }
                ?>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>