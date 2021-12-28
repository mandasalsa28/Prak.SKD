<?php

session_start();

if(isset($_SESSION["login_admin"])){
    header("Location: dashboard_admin.php");
    exit;
}

require 'functions.php';

if (isset($_POST["login_admin"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username='$username'");

    if (mysqli_num_rows($result)){
        $rows = mysqli_fetch_assoc($result);

        if (password_verify($password, $rows["password"])){

            $_SESSION["login_admin"] = true;
            header("Location: dashboard_admin.php");
            exit;
        }
    }
   $error = true;
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

    <title>PT. SAPTAKENCANA | Login Admin</title>
    <style>
        body{
            background-image:url("embossed-diamond.png");
            margin-left:auto;
            margin-right:auto;
        }
        h2{
            font-family: arial;
            padding-top:100px;
        }
        form{
            width: 400px;
            padding-top: 40px;
        }
        fieldset{
            background-color:white;
            border:#DAA520 2px solid;
            border-radius:5%;
            width: 400px;
        }
        legend{
            font-size:20pt;
            padding-top:10px;
        }
        input{
            padding:5px;
            width: 100%;
        }
        button{
            margin-left:200px;
        }
        a{
            text-decoration:none;
            font-family:arial;
        }

    </style>

</head>
<body>
    <center>
    <h2>PT. SaptaKencana Kharisma Jaya</h2>
    
    <?php if (isset($error)): ?>
        <p style="color:red; font-style:italic">Username atau Password SALAH</p>
    <?php endif ?>

    <form action="" method="post">
    <fieldset>
    <center><legend>Login Admin</legend></center>
    <hr width="90%">
    <br>
        <table>
            <tr>
                <td><input type="text" name="username" id="username" placeholder="Username"></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
                <td><input type="password" name="password" id="password" placeholder="Password"></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
                <td>
                <button type="submit" name="login_admin" class="btn btn-primary">Login</button>
                </td>
            </tr>
        </table>
</br> 
<p>Belum punya akun?<a href="regis_admin.php">Buat Akun</a></p>
    </fieldset>
    </form>
    </center>
    
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 
</body>
</html>