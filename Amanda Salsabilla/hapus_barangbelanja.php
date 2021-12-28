<?php

session_start();
$id_produk= $_GET["id"];
unset($_SESSION["keranjang_belanja"][$id_produk]);

echo "
<script>
    alert('Barang Belanja dihapus');
</script>";
echo "
<script>
    location='dashboard.php';
</script>";

?>