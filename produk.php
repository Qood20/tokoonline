<h3>Semua Produk</h3>
<div class="row row-cols-1 row-cols-md-4 g-4">
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM produk");
    while($data = mysqli_fetch_array($query)){
    ?>
    <div class="col">
        <div class="card h-100 product-card">
            <img src="assets/img/<?php echo $data['foto_produk']; ?>" class="card-img-top" alt="<?php echo $data['nama_produk']; ?>" style="height: 200px; object-fit: cover;">
            <div class="card-body pb-0">
                <h5 class="card-title"><?php echo $data['nama_produk']; ?></h5>
                <p class="card-text"><small><?php echo $data['deskripsi_produk']; ?></small></p>
                <h6 class="text-end fw-bold">Rp <?php echo number_format($data['harga_produk']); ?></h6>
            </div>
            <div class="card-footer">
                 <form method="POST" action="keranjang_act.php?act=add">
                    <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">
                    <input type="hidden" name="harga" value="<?php echo $data['harga_produk']; ?>">
                    <div class="input-group">
                        <input type="number" name="jumlah" class="form-control" value="1" min="1">
                        <button type="submit" class="btn btn-primary">+ Keranjang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
</div>