<h2 class="pb-2">Ubah Data Produk</h2>

<?php

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form enctype="multipart/form-data" method="post" class="col-8">
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="8">
            <?php echo $pecah['deskripsi_produk'];?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Ganti Foto</label><br>
        <img src="./foto_produk/<?php echo $pecah['foto_produk']?>" width="100">
        <input type="file" class="form-control" name="foto">
    </div>
    <br>
    <button class="btn btn-primary" name="submit">Simpan Perubahan</button>
</form>

<?php

if(isset($_POST['submit'])){
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $harga_barang = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    if (!empty($lokasi)){
        move_uploaded_file($lokasi, "./foto_produk/".$nama);

        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]', harga_produk='$harga_barang', 
        foto_produk='$nama', deskripsi_produk='$deskripsi' WHERE id_produk='$_GET[id]'");
    }else{
        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]', 
        harga_produk='$harga_barang', deskripsi_produk='$deskripsi' WHERE id_produk='$_GET[id]'");
    }
    echo "
    <script>
        alert('Data Barang Berhasil diubah');
        document.location.href = 'dashboard_admin.php?halaman=produk';
    </script>";
}

?>