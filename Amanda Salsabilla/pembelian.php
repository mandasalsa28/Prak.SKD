<h2 class="pb-2">Data Pembelian</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pengguna</th>
            <th>Tanggal Pembelian</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil= $koneksi->query("SELECT * FROM pembelian JOIN pengguna ON pembelian.id=pengguna.id"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor;?></td>
            <td><?php echo $pecah['username'];?></td>
            <td><?php echo $pecah['tanggal_pembelian'];?></td>
            <td><?php echo $pecah['total_pembelian'];?></td>
            <td>
                <a href="dashboard_admin.php?halaman=detail&id=<?php echo 
                $pecah['id_pembelian'];?>" class="btn btn-secondary">Detail</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>