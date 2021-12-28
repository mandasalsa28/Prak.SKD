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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. SAPTAKENCANA | Registrasi</title>

    <style>

        body{
            background-image: url("embossed-diamond.png");
            margin-left: auto;
            margin-right: auto;
        }
        form{
            max-width:400px;
            margin:auto;
            padding:150px;
        }
        fieldset{
            border:0px;
            background-color:#D3D3D3;
            padding-bottom:20px;
        }
        legend{
            font-size: 20pt;
            padding-top:10px;
        }
        button{
            cursor:pointer;
            padding:5px;
            margin-left:90px;
            background-color:#4169E1;
            color:white;
        }
        td{
            font-family:arial;
        }
        input{
            width:86%;
            padding:5px;
        }
        a{
            text-decoration:none;
            font-family:arial;
        }

    </style>
</head>
<body>
<center>
    <form action="" method="post">
    <fieldset>
    <center><legend>Registrasi Akun</legend>
    <hr width="90%">
    <br>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username" required></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
                <td>Alamat Email</td>
                <td><input type="text" name="email" id="email" required></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
                <td>Nomor Hp</td>
                <td><input type="text" name="nomorHp" id="nomorHp" required></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
                <td>Konfirmasi Password</td>
                <td><input type="password" name="password2" id="password2" required></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="registrasi">Registrasi</td>
            </tr>
        </table>
    </fieldset>
    <br><center><p style="font-family:arial;">sudah punya akun?<a href="login.php">Login sekarang</a></p>
    </form>
<center>
</body>
</html>