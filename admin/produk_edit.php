<?php
if(!isset($_GET['id'])){
    header('Location: index.php?page=produk');
}
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$id'");
$data = mysqli_fetch_array($query);

if(mysqli_num_rows($query) < 1){
    header('Location: index.php?page=produk');
}
?>
<h3>Edit Produk</h3>

<form action="produk_act.php?act=edit&id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nama_produk" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?php echo $data['nama_produk']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="harga_produk" class="form-label">Harga Produk</label>
        <input type="number" name="harga_produk" id="harga_produk" class="form-control" value="<?php echo $data['harga_produk']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="stok_produk" class="form-label">Stok Produk</label>
        <input type="number" name="stok_produk" id="stok_produk" class="form-control" value="<?php echo $data['stok_produk']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi_produk" class="form-label">Deskripsi</label>
        <textarea name="deskripsi_produk" id="deskripsi_produk" class="form-control" rows="3" required><?php echo $data['deskripsi_produk']; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="foto_produk" class="form-label">Foto Produk</label><br>
        <img src="../assets/img/<?php echo $data['foto_produk']; ?>" width="150" class="mb-2">
        <input type="file" name="foto_produk" id="foto_produk" class="form-control">
        <small class="text-muted">Kosongkan jika tidak ingin mengubah foto.</small>
    </div>
    <a href="index.php?page=produk" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>