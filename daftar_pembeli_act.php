<?php
include 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_pengguna'];
    $email = $_POST['email_pengguna'];
    $password = password_hash($_POST['password_pengguna'], PASSWORD_DEFAULT); // Hash password
    $telepon = $_POST['telepon_pengguna'];
    $alamat = $_POST['alamat_pengguna'];

    // Cek apakah email sudah terdaftar
    $cek_email = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email_pengguna='$email'");
    if (mysqli_num_rows($cek_email) > 0) {
        echo "<script>alert('Email sudah terdaftar, silakan gunakan email lain atau login.');</script>";
        echo "<script>location='daftar_pembeli.php';</script>";
        exit();
    }

    $query = mysqli_query($koneksi, "INSERT INTO pengguna (nama_pengguna, email_pengguna, password_pengguna, telepon_pengguna, alamat_pengguna) VALUES ('$nama', '$email', '$password', '$telepon', '$alamat')");

    if ($query) {
        echo "<script>alert('Registrasi Berhasil! Silakan Login.');</script>";
        echo "<script>location='login_pembeli.php';</script>";
    } else {
        echo "<script>alert('Registrasi Gagal, silakan coba lagi.');</script>";
        echo "<script>location='daftar_pembeli.php';</script>";
    }
} else {
    header('Location: daftar_pembeli.php');
}
?>