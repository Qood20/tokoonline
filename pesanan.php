<h3>Riwayat Pesanan Anda</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Asumsi id_pengguna didapat dari session setelah login
        // Untuk pengetesan, kita gunakan id_pengguna statis dulu, misal 1
        $id_pengguna = isset($_SESSION['id_pengguna']) ? $_SESSION['id_pengguna'] : 1; 

        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id_pengguna = '$id_pengguna' ORDER BY tanggal_pesanan DESC");
        
        if(mysqli_num_rows($query) > 0){
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo date('d M Y', strtotime($data['tanggal_pesanan'])); ?></td>
            <td>Rp <?php echo number_format($data['total_pesanan']); ?></td>
            <td><span class="badge bg-warning"><?php echo $data['status_pesanan']; ?></span></td>
            <td>
                <a href="index.php?page=detail_pesanan&id=<?php echo $data['id_pesanan']; ?>" class="btn btn-info btn-sm">Detail</a>
            </td>
        </tr>
        <?php 
            }
        } else {
            echo "<tr><td colspan='5' class='text-center'>Anda belum memiliki riwayat pesanan.</td></tr>";
        }
        ?>
    </tbody>
</table>