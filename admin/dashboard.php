<h3>Selamat Datang, <?php echo $_SESSION['nama_lengkap']; ?>!</h3>
<hr>
<p>Ini adalah halaman administrasi Toko Online. Anda dapat mengelola produk dan pesanan melalui menu navigasi di atas.</p>

<div class="row">
    <div class="col-md-6">
        <div class="card text-white bg-primary mb-3">
            <div class="card-header">Total Produk</div>
            <div class="card-body">
                <?php $jml_produk = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM produk")); ?>
                <h5 class="card-title"><?php echo $jml_produk; ?> Produk</h5>
                <p class="card-text">Kelola semua produk yang ada di toko Anda.</p>
                <a href="index.php?page=produk" class="btn btn-light">Lihat Detail</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-white bg-success mb-3">
            <div class="card-header">Total Pesanan</div>
            <div class="card-body">
                <?php $jml_pesanan = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM pesanan")); ?>
                <h5 class="card-title"><?php echo $jml_pesanan; ?> Pesanan</h5>
                <p class="card-text">Lihat dan kelola semua pesanan yang masuk.</p>
                <a href="index.php?page=pesanan" class="btn btn-light">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>
