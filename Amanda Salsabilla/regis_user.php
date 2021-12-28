<?php

require 'functions.php';

if (isset ($_POST["registrasi"])){
    if (registrasi($_POST)>0){
        echo "
            <script>
                alert('Registrasi BERHASIL');
            </script>
        ";
    }else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>PT. SAPTAKENCANA | Registrasi</title>

    <style>

        body{
            background-image: url("embossed-diamond.png");
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>
<body>
<div class="row justify-content-around pt-5">
    <div class="col-4 bg-secondary">
    <main role="main" class="flex-shrink-0">
 	<div class="container">
 		<h2 class="mt-4">Registrasi User</h1>
         <p class="lead">Silahkan Daftarkan Identitas Anda</p>
 		<hr/>
 		<form method="post" action="">
 		<div class="form-group">
 			<label for="username" class="col-sm-2 col-form-label">Username</label>
 			<div class="col">
 				<input type="text" class="form-control" id="username" name="username" placeholder="Username">
 			</div>
 		</div>
		<div class="form-group">
 			<label for="email" class="col-sm-2 col-form-label">Email</label>
 			<div class="col">
 				<input type="text" class="form-control" id="email" name="email" placeholder="Email">
 			</div>
 		</div>
		<div class="form-group">
 			<label for="nomorHp" class="col col-form-label">Nomor HP</label>
 			<div class="col">
 				<input type="text" class="form-control" id="nomorHp" name="nomorHp" placeholder="Nomor HP">
 			</div>
 		</div>
 		<div class="form-group">
 			<label for="password" class="col col-form-label">Password</label>
 			<div class="col">
 				<input type="password" class="form-control" name="password" id="password" placeholder="Password">
 			</div>
 		</div>
 		<div class="form-group">
 			<label for="password" class="col col-form-label">Konfirmasi Password</label>
 			<div class="col">
 				<input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password">
 			</div>
 		</div>
        <br>
 		<div class="form-group pb-4">
 			<div class="col">
 				<button type="submit" class="btn btn-primary" name="registrasi">Registrasi</button>
 			</div>
 		</div>
        <p style="font-family:arial;">sudah punya akun?<a href="login.php" style="text-decoration:none;">Login sekarang</a></p>
 	</form>
 </div>
</main>


    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>