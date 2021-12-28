<?php

$ambil = $koneksi->query("SELECT * FROM pengguna WHERE id='$_GET[id]'");
$pecah= $ambil->fetch_assoc();


$koneksi->query("DELETE FROM pengguna WHERE id='$_GET[id]'");

echo "
    <script>
        alert('User BERHASIL dihapus');
    </script>";
echo "
    <script>
        location='dashboard_admin.php?halaman=pengguna';
    </script>";

?>