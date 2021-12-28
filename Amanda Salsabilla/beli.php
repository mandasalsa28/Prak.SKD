<?php

session_start();
require 'functions.php';

$id_produk= $_GET['id'];

if(isset($_SESSION['keranjang_belanja'][$id_produk])){
    $_SESSION['keranjang_belanja'][$id_produk]+=1;
}else{
    $_SESSION['keranjang_belanja'][$id_produk]=1;
}

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

echo "
<script>
    alert('Barang masuk ke Menu Keranjang');
</script> ";
echo "
<script>
    location='keranjang_belanja.php';
</script> ";

?>