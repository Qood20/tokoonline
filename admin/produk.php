<h3>Kelola Produk</h3>
<a href="index.php?page=produk_tambah" class="btn btn-primary mb-3">Tambah Produk</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><img src="../assets/img/<?php echo $data['foto_produk']; ?>" width="100"></td>
            <td><?php echo $data['nama_produk']; ?></td>
            <td>Rp <?php echo number_format($data['harga_produk']); ?></td>
            <td><?php echo $data['stok_produk']; ?></td>
            <td>
                <a href="index.php?page=produk_edit&id=<?php echo $data['id_produk']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="produk_act.php?act=hapus&id=<?php echo $data['id_produk']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>