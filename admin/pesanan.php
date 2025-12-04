<h3>Kelola Pesanan Masuk</h3>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Pesanan</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM pesanan JOIN pengguna ON pesanan.id_pengguna = pengguna.id_pengguna ORDER BY pesanan.id_pesanan DESC");
        if(mysqli_num_rows($query) > 0){
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td>#<?php echo $data['id_pesanan']; ?></td>
            <td><?php echo $data['nama_pengguna']; ?></td>
            <td><?php echo date('d M Y', strtotime($data['tanggal_pesanan'])); ?></td>
            <td>Rp <?php echo number_format($data['total_pesanan']); ?></td>
            <td>
                <form action="pesanan_act.php?id=<?php echo $data['id_pesanan']; ?>" method="POST">
                    <div class="input-group">
                        <select name="status" class="form-select">
                            <option <?php if($data['status_pesanan']=='Belum Dibayar') echo 'selected'; ?>>Belum Dibayar</option>
                            <option <?php if($data['status_pesanan']=='Diproses') echo 'selected'; ?>>Diproses</option>
                            <option <?php if($data['status_pesanan']=='Dikirim') echo 'selected'; ?>>Dikirim</option>
                            <option <?php if($data['status_pesanan']=='Selesai') echo 'selected'; ?>>Selesai</option>
                            <option <?php if($data['status_pesanan']=='Batal') echo 'selected'; ?>>Batal</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </form>
            </td>
            <td>
                <a href="index.php?page=pesanan_detail&id=<?php echo $data['id_pesanan']; ?>" class="btn btn-info btn-sm">Detail</a>
            </td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='7' class='text-center'>Belum ada pesanan yang masuk.</td></tr>";
        }
        ?>
    </tbody>
</table>