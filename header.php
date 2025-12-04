<?php 
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kelontong Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="index.php">TokoOnline</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=keranjang">Keranjang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=pesanan">List Pesanan</a>
        </li>
        <?php if(isset($_SESSION['id_pengguna'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="logout_pembeli.php">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=login_pembeli">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=daftar_pembeli">Daftar</a>
          </li>
        <?php endif; ?>
        <li class="nav-item">
          <a class="nav-link" href="admin/login.php">Admin</a>
        </li>      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
