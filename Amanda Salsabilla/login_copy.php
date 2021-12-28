<?php

session_start();

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

require 'functions.php';

if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username='$username'");

    if (mysqli_num_rows($result)){
        $rows = mysqli_fetch_assoc($result);

        if (password_verify($password, $rows["password"])){

            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
   $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. SAPTAKENCANA | Login User</title>
    <style>
        body{
            background-image:url("embossed-diamond.png");
            margin-left:auto;
            margin-right:auto;
        }
        h1{
            font-family: arial;
            padding-top:100px;
        }
        form{
            width: 400px;
            padding:50px;
        }
        fieldset{
            background-color:#D3D3D3;
            border:0px;
        }
        legend{
            font-size:20pt;
            padding-top:10px;
        }
        input{
            padding:5px;
            width: 94%;
        }
        button{
            cursor:pointer;
            padding:5px;
            background-color:#4169E1;
            color:white;
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
    <h1>PT. Saptakencana Kharisma Jaya</h1>
    
    <?php if (isset($error)): ?>
        <p style="color:red; font-style:italic">Username atau Password SALAH</p>
    <?php endif ?>

    <form action="" method="post">
    <fieldset>
    <center><legend>Login Akun</legend>
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
                <button type="submit" name="login">Login</button>
                </td>
            </tr>
        </table>
<br> 
    </fieldset>
    <br><center><a href="daftar.php">Buat Akun?</a>
    </form>
    
</body>
</html>