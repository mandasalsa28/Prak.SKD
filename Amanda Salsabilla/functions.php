<?php

$conn = mysqli_connect('localhost', 'root', '', 'saptakencana');
$koneksi = new mysqli("localhost", "root",  "", "saptakencana");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }

    return $rows;
}

function registrasi($data){

    global $conn;
    $username = $data["username"];
    $email = strtolower($data["email"]);
    $nomorHp = strtolower($data["nomorHp"]);
    $password = mysqli_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM pengguna WHERE username='$username'");
    $result2 = mysqli_query($conn, "SELECT email FROM pengguna WHERE email='$email'");

    if (mysqli_fetch_assoc($result)){
        echo "
            <script>
                alert ('Username sudah terdaftar');
            </script>
            ";

            return false;
    }
    if (mysqli_fetch_assoc($result2)){
        echo "
            <script>
                alert ('Email sudah digunakan');
            </script>
            ";

            return false;
    }

    if ($password != $password2){
        echo "
            <script>
                alert ('Konfirmasi Password tidak sama');
            </script>
            ";

            return false;
    }else {

        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO pengguna VALUES ('', '$username', '$email', '$nomorHp', '$password')");

        return mysqli_affected_rows($conn);
    }

}

function registrasi_admin($data){

    global $conn;
    $username = $data["username"];
    $email = strtolower($data["email"]);
    $password = mysqli_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM tb_admin WHERE username='$username'");
    $result2 = mysqli_query($conn, "SELECT email FROM tb_admin WHERE email='$email'");

    if (mysqli_fetch_assoc($result)){
        echo "
            <script>
                alert ('Username sudah terdaftar');
            </script>
            ";

            return false;
    }
    if (mysqli_fetch_assoc($result2)){
        echo "
            <script>
                alert ('Email sudah digunakan');
            </script>
            ";

            return false;
    }

    if ($password != $password2){
        echo "
            <script>
                alert ('Konfirmasi Password tidak sama');
            </script>
            ";

            return false;
    }else {

        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO tb_admin VALUES ('', '$username', '$email', '$password')");

        return mysqli_affected_rows($conn);
    }

}

?>