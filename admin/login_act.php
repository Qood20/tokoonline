<?php
session_start();
include '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username dan Password tidak boleh kosong');</script>";
        echo "<script>location='login.php';</script>";
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username'");
        $admin = mysqli_fetch_assoc($query);

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                $_SESSION['id_admin'] = $admin['id_admin'];
                $_SESSION['nama_lengkap'] = $admin['nama_lengkap'];
                
                header('Location: index.php');
            } else {
                echo "<script>alert('Password salah!');</script>";
                echo "<script>location='login.php';</script>";
            }
        } else {
            echo "<script>alert('Username tidak ditemukan!');</script>";
            echo "<script>location='login.php';</script>";
        }
    }
} else {
    header('Location: login.php');
}
?>