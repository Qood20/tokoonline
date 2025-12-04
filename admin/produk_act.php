<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['id_admin'])) {
    exit('Unauthorized');
}

$act = $_GET['act'];

if ($act == 'tambah') {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga_produk'];
    $stok = $_POST['stok_produk'];
    $deskripsi = $_POST['deskripsi_produk'];

    $foto = $_FILES['foto_produk']['name'];
    $lokasi = $_FILES['foto_produk']['tmp_name'];
    $tujuan = "../assets/img/".$foto;

    if(move_uploaded_file($lokasi, $tujuan)){
        $query = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga_produk, stok_produk, deskripsi_produk, foto_produk) VALUES ('$nama', '$harga', '$stok', '$deskripsi', '$foto')");
        if($query){
            header('Location: index.php?page=produk&status=sukses_tambah');
        } else {
            header('Location: index.php?page=produk&status=gagal');
        }
    } else {
        header('Location: index.php?page=produk&status=gagal_upload');
    }
}

elseif ($act == 'edit') {
    $id = $_GET['id'];
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga_produk'];
    $stok = $_POST['stok_produk'];
    $deskripsi = $_POST['deskripsi_produk'];

    $foto = $_FILES['foto_produk']['name'];
    $lokasi = $_FILES['foto_produk']['tmp_name'];

    // Jika foto diubah
    if (!empty($foto)) {
        $tujuan = "../assets/img/".$foto;
        move_uploaded_file($lokasi, $tujuan);
        $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', harga_produk='$harga', stok_produk='$stok', deskripsi_produk='$deskripsi', foto_produk='$foto' WHERE id_produk='$id'");
    } else {
        // Jika foto tidak diubah
        $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', harga_produk='$harga', stok_produk='$stok', deskripsi_produk='$deskripsi' WHERE id_produk='$id'");
    }

    if($query){
        header('Location: index.php?page=produk&status=sukses_edit');
    } else {
        header('Location: index.php?page=produk&status=gagal');
    }
}

elseif ($act == 'hapus') {
    $id = $_GET['id'];
    // Optional: Hapus file gambar dari server
    $q = mysqli_query($koneksi, "SELECT foto_produk FROM produk WHERE id_produk='$id'");
    $data = mysqli_fetch_array($q);
    if(is_file("../assets/img/".$data['foto_produk'])){
        unlink("../assets/img/".$data['foto_produk']);
    }

    $query = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk = '$id'");
    if($query){
        header('Location: index.php?page=produk&status=sukses_hapus');
    } else {
        header('Location: index.php?page=produk&status=gagal');
    }
}
?>