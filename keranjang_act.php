<?php
session_start();
include 'config/koneksi.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];

    if ($act == 'add') {
        if (isset($_POST['id_produk'])) {
            $id_produk = $_POST['id_produk'];
            $jumlah = $_POST['jumlah'];

            // Ambil data produk
            $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
            $produk = mysqli_fetch_assoc($query);

            if ($produk) {
                // Jika keranjang sudah ada
                if (isset($_SESSION['keranjang'][$id_produk])) {
                    $_SESSION['keranjang'][$id_produk]['jumlah'] += $jumlah;
                } else {
                    // Jika keranjang belum ada - PERBAIKAN NAMA KOLOM
                    $_SESSION['keranjang'][$id_produk] = [
                        'id_produk' => $id_produk,
                        'nama_produk' => $produk['nama_produk'],
                        'harga_produk' => $produk['harga_produk'],
                        'gambar' => $produk['foto_produk'],  // ← SESUAIKAN DENGAN DATABASE!
                        'jumlah' => $jumlah
                    ];
                }
            }
        }
        header('location:index.php?page=keranjang');
    }

    elseif ($act == 'update') {
        if (isset($_POST['id_produk'])) {
            foreach($_POST['id_produk'] as $key => $id_produk){
                $jumlah = $_POST['jumlah'][$key];
                if($jumlah == 0){
                    unset($_SESSION['keranjang'][$id_produk]);
                } else {
                    $_SESSION['keranjang'][$id_produk]['jumlah'] = $jumlah;
                }
            }
        }
        header('location:index.php?page=keranjang');
    }

    elseif ($act == 'delete') {
        if (isset($_GET['id_produk'])) {
            $id_produk = $_GET['id_produk'];
            unset($_SESSION['keranjang'][$id_produk]);
        }
        header('location:index.php?page=keranjang');
    }

    elseif ($act == 'clear') {
        $_SESSION['keranjang'] = [];
        header('location:index.php?page=keranjang');
    }
}
?>