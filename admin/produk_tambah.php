<h3>Tambah Produk Baru</h3>

<form action="produk_act.php?act=tambah" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nama_produk" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="harga_produk" class="form-label">Harga Produk</label>
        <input type="number" name="harga_produk" id="harga_produk" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="stok_produk" class="form-label">Stok Produk</label>
        <input type="number" name="stok_produk" id="stok_produk" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi_produk" class="form-label">Deskripsi</label>
        <textarea name="deskripsi_produk" id="deskripsi_produk" class="form-control" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="foto_produk" class="form-label">Foto Produk</label>
        <input type="file" name="foto_produk" id="foto_produk" class="form-control" required>
    </div>
    <a href="index.php?page=produk" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>