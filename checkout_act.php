<?php
include 'config/koneksi.php';

$id_pengguna = null;

if (isset($_SESSION['id_pengguna'])) {
    // Jika pengguna sudah login, gunakan ID dari sesi
    $id_pengguna = $_SESSION['id_pengguna'];
} else {
    // Jika pengguna belum login, ambil data dari form
    $nama_pengguna = $_POST['nama_pengguna'];
    $email_pengguna = $_POST['email_pengguna'];
    $telepon_pengguna = $_POST['telepon_pengguna'];
    $alamat_pengguna = $_POST['alamat_pengguna'];

    // Cek apakah email sudah ada di database (mungkin pengguna lama tapi tidak login)
    $query_cek_pengguna = mysqli_query($koneksi, "SELECT id_pengguna FROM pengguna WHERE email_pengguna = '$email_pengguna'");
    if (mysqli_num_rows($query_cek_pengguna) > 0) {
        $data_pengguna_lama = mysqli_fetch_assoc($query_cek_pengguna);
        $id_pengguna = $data_pengguna_lama['id_pengguna'];
    } else {
        // Jika email belum ada, masukkan sebagai pengguna baru (tanpa password)
        $query_insert_pengguna = mysqli_query($koneksi, "INSERT INTO pengguna (nama_pengguna, email_pengguna, telepon_pengguna, alamat_pengguna) VALUES ('$nama_pengguna', '$email_pengguna', '$telepon_pengguna', '$alamat_pengguna')");
        if ($query_insert_pengguna) {
            $id_pengguna = mysqli_insert_id($koneksi);
        } else {
            echo "<script>alert('Gagal menyimpan data pengguna. Silakan coba lagi.');</script>";
            echo "<script>location='index.php?page=checkout';</script>";
            exit();
        }
    }
}

if (isset($_POST['checkout'])) {
    $total_pesanan = $_POST['total_belanja'];
    $tanggal_pesanan = date("Y-m-d");

    // 1. Simpan data ke tabel pesanan
    $query_pesanan = mysqli_query($koneksi, "INSERT INTO pesanan (id_pengguna, tanggal_pesanan, total_pesanan, status_pesanan) VALUES ('$id_pengguna', '$tanggal_pesanan', '$total_pesanan', 'Belum Dibayar')");

    if ($query_pesanan) {
        // Dapatkan id_pesanan terakhir
        $id_pesanan_baru = mysqli_insert_id($koneksi);

        // 2. Simpan data ke tabel detail_pesanan
        foreach ($_SESSION['keranjang'] as $id_produk => $item) {
            $jumlah = $item['jumlah'];
            mysqli_query($koneksi, "INSERT INTO detail_pesanan (id_pesanan, id_produk, jumlah) VALUES ('$id_pesanan_baru', '$id_produk', '$jumlah')");
        
            // 3. Kurangi stok produk (opsional, tapi best practice)
            mysqli_query($koneksi, "UPDATE produk SET stok_produk = stok_produk - $jumlah WHERE id_produk = '$id_produk'");
        }

        // 4. Kosongkan keranjang belanja
        unset($_SESSION['keranjang']);

        // Redirect ke halaman sukses atau halaman pesanan
        echo "<script>alert('Pesanan berhasil dibuat! Silakan lakukan pembayaran.');</script>";
        echo "<script>location='index.php?page=pesanan_sukses&id=$id_pesanan_baru';</script>";

    } else {
        echo "<script>alert('Gagal membuat pesanan, silakan coba lagi.');</script>";
        echo "<script>location='index.php?page=checkout';</script>";
    }
}
?>