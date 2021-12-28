<h2 class="pb-2">Data Pengguna/User</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pengguna</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM pengguna"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['username']; ?></td>
            <td><?php echo $pecah['email']; ?></td>
            <td><?php echo $pecah['nomorHp']; ?></td>
            <td>
                <a href="dashboard_admin.php?halaman=hapuspengguna&id=<?php echo $pecah['id']; ?>" 
                class="btn btn-outline-danger">hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>