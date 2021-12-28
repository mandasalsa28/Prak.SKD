<h2 class="pb-2">Tambah Produk</h2>

<form enctype="multipart/form-data" method="post" class="col-8">
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="8"></textarea>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <br>
    <button class="btn btn-primary" name="submit">Simpan</button>
</form>

<?php

if (isset($_POST['submit'])){
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "./foto_produk/".$nama);
    $koneksi->query("INSERT INTO produk (nama_produk,harga_produk,foto_produk,deskripsi_produk)
    VALUES ('$_POST[nama]','$_POST[harga]','$nama','$_POST[deskripsi]')");

    echo "<div class='alert alert-info'>Data Barang Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=dashboard_admin.php?halaman=produk'>";

}
?>