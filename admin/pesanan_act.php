<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['id_admin'])) {
    exit('Unauthorized');
}

if(isset($_GET['id']) && isset($_POST['status'])){
    $id_pesanan = $_GET['id'];
    $status = $_POST['status'];

    $query = mysqli_query($koneksi, "UPDATE pesanan SET status_pesanan = '$status' WHERE id_pesanan = '$id_pesanan'");

    if($query){
        header('Location: index.php?page=pesanan&status=sukses_update');
    } else {
        header('Location: index.php?page=pesanan&status=gagal');
    }
} else {
    header('Location: index.php?page=pesanan');
}
?>