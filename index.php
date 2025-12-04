<?php 
include 'header.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'produk':
            include 'produk.php';
            break;
        case 'keranjang':
            include 'keranjang.php';
            break;
        case 'checkout':
            include 'checkout.php';
            break;
        case 'pesanan':
            include 'pesanan.php';
            break;
        case 'detail_pesanan':
            include 'detail_pesanan.php';
            break;
        case 'pesanan_sukses':
            include 'pesanan_sukses.php';
            break;
        case 'login_pembeli':
            include 'login_pembeli.php';
            break;
        case 'daftar_pembeli':
            include 'daftar_pembeli.php';
            break;
        case 'beranda':
        default:
            include 'beranda.php';
            break;
    }
} else {
    include 'beranda.php';
}

include 'footer.php';
?>