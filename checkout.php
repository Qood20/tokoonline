<?php
if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
    echo "<script>alert('Keranjang kosong, tidak bisa checkout');</script>";
    echo "<script>location='index.php?page=produk';</script>";
    exit();
}

$nama_pengguna = '';
$email_pengguna = '';
$telepon_pengguna = '';
$alamat_pengguna = '';

if (isset($_SESSION['id_pengguna'])) {
    $id_pengguna_session = $_SESSION['id_pengguna'];
    $query_pengguna = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna_session'");
    $data_pengguna = mysqli_fetch_assoc($query_pengguna);

    if ($data_pengguna) {
        $nama_pengguna = $data_pengguna['nama_pengguna'];
        $email_pengguna = $data_pengguna['email_pengguna'];
        $telepon_pengguna = $data_pengguna['telepon_pengguna'];
        $alamat_pengguna = $data_pengguna['alamat_pengguna'];
    }
}
?>

<h3>Checkout Pesanan</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $total_belanja = 0;
        foreach ($_SESSION['keranjang'] as $id_produk => $item): 
            $subtotal = $item['harga_produk'] * $item['jumlah'];
            $total_belanja += $subtotal;
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $item['nama_produk']; ?></td>
            <td>Rp <?php echo number_format($item['harga_produk']); ?></td>
            <td><?php echo $item['jumlah']; ?></td>
            <td>Rp <?php echo number_format($subtotal); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4">Total Belanja</th>
            <th>Rp <?php echo number_format($total_belanja); ?></th>
        </tr>
    </tfoot>
</table>

<form method="POST" action="checkout_act.php">
    <input type="hidden" name="total_belanja" value="<?php echo $total_belanja; ?>">
    
    <h4>Informasi Pengiriman</h4>
    <?php if (!isset($_SESSION['id_pengguna'])): ?>
        <div class="alert alert-warning">
            Anda belum login. Silakan isi data diri Anda atau <a href="index.php?page=login_pembeli">Login</a> / <a href="index.php?page=daftar_pembeli">Daftar</a>.
        </div>
        <div class="mb-3">
            <label for="nama_pengguna" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?php echo $nama_pengguna; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email_pengguna" class="form-label">Email</label>
            <input type="email" class="form-control" id="email_pengguna" name="email_pengguna" value="<?php echo $email_pengguna; ?>" required>
        </div>
        <div class="mb-3">
            <label for="telepon_pengguna" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="telepon_pengguna" name="telepon_pengguna" value="<?php echo $telepon_pengguna; ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat_pengguna" class="form-label">Alamat Lengkap</label>
            <textarea class="form-control" id="alamat_pengguna" name="alamat_pengguna" rows="3" required><?php echo $alamat_pengguna; ?></textarea>
        </div>
    <?php else: ?>
        <div class="alert alert-success">
            Anda login sebagai: <b><?php echo $nama_pengguna; ?></b> (<?php echo $email_pengguna; ?>)<br>
            Alamat pengiriman: <?php echo $alamat_pengguna; ?><br>
            Telepon: <?php echo $telepon_pengguna; ?><br>
            <small>Data ini akan digunakan untuk pengiriman. Jika ingin mengubah, silakan update profil Anda.</small>
        </div>
    <?php endif; ?>

    <div class="alert alert-info">
        Pastikan semua item pesanan Anda sudah benar. Klik tombol di bawah untuk menyelesaikan pesanan.
    </div>

    <div class="d-flex justify-content-between">
        <a href="index.php?page=keranjang" class="btn btn-secondary btn-lg">Edit / Kembali ke Keranjang</a>
        <button type="submit" name="checkout" class="btn btn-success btn-lg">Buat Pesanan</button>
    </div>
</form>
