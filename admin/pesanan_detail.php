<?php
if (!isset($_GET['id'])) {
    echo "<script>location='index.php?page=pesanan';</script>";
    exit();
}

$id_pesanan = $_GET['id'];
$query_pesanan = mysqli_query($koneksi, "SELECT * FROM pesanan JOIN pengguna ON pesanan.id_pengguna=pengguna.id_pengguna WHERE pesanan.id_pesanan='$id_pesanan'");
$pesanan = mysqli_fetch_assoc($query_pesanan);

if(!$pesanan){
    echo "<script>alert('Data pesanan tidak ditemukan'); location='index.php?page=pesanan';</script>";
    exit();
}
?>

<h3>Detail Pesanan #<?php echo $pesanan['id_pesanan']; ?></h3>

<div class="row">
    <div class="col-md-6">
        <h4>Informasi Pelanggan</h4>
        <strong>Nama:</strong> <?php echo $pesanan['nama_pengguna']; ?><br>
        <strong>Telepon:</strong> <?php echo $pesanan['telepon_pengguna']; ?><br>
        <strong>Email:</strong> <?php echo $pesanan['email_pengguna']; ?><br>
        <strong>Alamat:</strong> <?php echo $pesanan['alamat_pengguna']; ?><br>
    </div>
    <div class="col-md-6">
        <h4>Informasi Pesanan</h4>
        <strong>Tanggal:</strong> <?php echo date('d M Y', strtotime($pesanan['tanggal_pesanan'])); ?><br>
        <strong>Total:</strong> Rp <?php echo number_format($pesanan['total_pesanan']); ?><br>
        <strong>Status:</strong> <span class="badge bg-primary"><?php echo $pesanan['status_pesanan']; ?></span><br>
    </div>
</div>

<h4 class="mt-4">Rincian Item Pesanan</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga Satuan</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $query_detail = mysqli_query($koneksi, "SELECT * FROM detail_pesanan JOIN produk ON detail_pesanan.id_produk=produk.id_produk WHERE detail_pesanan.id_pesanan='$id_pesanan'");
        while($item = mysqli_fetch_array($query_detail)){
            $subtotal = $item['harga_produk'] * $item['jumlah'];
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $item['nama_produk']; ?></td>
            <td>Rp <?php echo number_format($item['harga_produk']); ?></td>
            <td><?php echo $item['jumlah']; ?></td>
            <td>Rp <?php echo number_format($subtotal); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<a href="index.php?page=pesanan" class="btn btn-secondary">Kembali ke Daftar Pesanan</a>
