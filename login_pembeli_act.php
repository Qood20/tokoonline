<?php
include 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "<script>alert('Email dan Password tidak boleh kosong');</script>";
        echo "<script>location='login_pembeli.php';</script>";
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email_pengguna='$email'");
        $pengguna = mysqli_fetch_assoc($query);

        if ($pengguna) {
            if (password_verify($password, $pengguna['password_pengguna'])) {
                $_SESSION['id_pengguna'] = $pengguna['id_pengguna'];
                $_SESSION['nama_pengguna'] = $pengguna['nama_pengguna'];
                
                echo "<script>alert('Login Berhasil!');</script>";
                echo "<script>location='index.php';</script>";
            } else {
                echo "<script>alert('Password salah!');</script>";
                echo "<script>location='login_pembeli.php';</script>";
            }
        } else {
            echo "<script>alert('Email tidak ditemukan!');</script>";
            echo "<script>location='login_pembeli.php';</script>";
        }
    }
} else {
    header('Location: login_pembeli.php');
}
?>