<div class="p-5 mb-4 rounded-3 hero-section">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Selamat Datang di Toko Online Kamu</h1>
        <p class="col-md-8 fs-4">Menyediakan berbagai kebutuhan pokok sehari-hari dengan kualitas terbaik dan harga terjangkau.</p>
        <a href="index.php?page=produk" class="btn btn-primary btn-lg">Lihat Semua Produk</a>
    </div>
</div>

<h3>Produk Terlaris</h3>
<div class="row">
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM produk LIMIT 3");
    while($data = mysqli_fetch_array($query)){
    ?>
    <div class="col-md-4">
        <div class="card product-card">
            <img src="assets/img/<?php echo $data['foto_produk']; ?>" class="card-img-top" alt="<?php echo $data['nama_produk']; ?>" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $data['nama_produk']; ?></h5>
                <p class="card-text">Rp <?php echo number_format($data['harga_produk']); ?></p>
                <a href="index.php?page=produk" class="btn btn-outline-dark btn-sm">Lihat Detail</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>