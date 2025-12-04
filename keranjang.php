<h3>Keranjang Belanja</h3>

<?php
if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
    echo "<div class='alert alert-info'>Keranjang belanja kosong. Silakan <a href='index.php?page=produk'>belanja</a> terlebih dahulu.</div>";
} else {
?>

<form method="POST" action="keranjang_act.php?act=update">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th width="15%">Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        $total = 0;
        foreach ($_SESSION['keranjang'] as $id_produk => $item): 
            $subtotal = $item['harga_produk'] * $item['jumlah'];
            $total += $subtotal;
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $item['nama_produk']; ?></td>
            <td>Rp <?php echo number_format($item['harga_produk']); ?></td>
            <td>
                <input type="hidden" name="id_produk[]" value="<?php echo $id_produk; ?>">
                <input type="number" name="jumlah[]" class="form-control" value="<?php echo $item['jumlah']; ?>" min="0">
            </td>
            <td>Rp <?php echo number_format($subtotal); ?></td>
            <td>
                <a href="keranjang_act.php?act=delete&id_produk=<?php echo $id_produk; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4">Total Belanja</th>
            <th colspan="2">Rp <?php echo number_format($total); ?></th>
        </tr>
    </tfoot>
</table>

<div class="d-flex justify-content-between">
    <a href="index.php?page=produk" class="btn btn-secondary">Lanjut Belanja</a>
    <div>
        <button type="submit" class="btn btn-primary">Perbarui Keranjang</button>
        <a href="keranjang_act.php?act=clear" class="btn btn-danger">Kosongkan Keranjang</a>
        <a href="index.php?page=checkout" class="btn btn-success">Checkout</a>
    </div>
</div>
</form>

<?php
}
?>