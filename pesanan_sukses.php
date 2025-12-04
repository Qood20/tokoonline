<?php
if (!isset($_GET['id'])) {
    echo "<script>location='index.php';</script>";
    exit();
}

$id_pesanan = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id_pesanan = '$id_pesanan'");
$pesanan = mysqli_fetch_assoc($query);

if (!$pesanan) {
    echo "<script>alert('Pesanan tidak ditemukan.'); location='index.php';</script>";
    exit();
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                <h2 class="mt-2">Pesanan Anda Berhasil Dibuat!</h2>
                <p class="lead">Terima kasih telah berbelanja. Segera selesaikan pembayaran Anda.</p>
            </div>

            <div class="card mt-4">
                <div class="card-header text-center">
                    <strong>Instruksi Pembayaran</strong>
                </div>
                <div class="card-body">
                    <p class="text-center">Silakan lakukan pembayaran sebesar <strong>Rp <?php echo number_format($pesanan['total_pesanan']); ?></strong> dalam 1x24 jam.</p>
                    
                    <h5 class="mt-4">Transfer Bank</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>BCA:</strong> 123-456-7890 a/n TokoOnline</li>
                        <li class="list-group-item"><strong>Mandiri:</strong> 098-765-4321 a/n TokoOnline</li>
                        <li class="list-group-item"><strong>BRI:</strong> 555-666-777 a/n TokoOnline</li>
                    </ul>

                    <h5 class="mt-4">E-Wallet</h5>
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>GoPay/OVO/Dana:</strong> 0812-3456-7890 a/n TokoOnline</li>
                    </ul>

                    <div class="alert alert-warning mt-4" role="alert">
                        Penting: Mohon lakukan konfirmasi setelah pembayaran agar pesanan Anda dapat segera kami proses.
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="index.php?page=pesanan" class="btn btn-primary">Lihat Riwayat Pesanan</a>
            </div>
        </div>
    </div>
</div>
