<?php
include 'header.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'produk':
            include 'produk.php';
            break;
        case 'produk_tambah':
            include 'produk_tambah.php';
            break;
        case 'produk_edit':
            include 'produk_edit.php';
            break;
        case 'pesanan':
            include 'pesanan.php';
            break;
        case 'pesanan_detail':
            include 'pesanan_detail.php';
            break;
        case 'dashboard':
        default:
            include 'dashboard.php';
            break;
    }
} else {
    include 'dashboard.php';
}

include 'footer.php';
?>