<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Pembeli - Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #198754;
            color: white;
            border-radius: 12px 12px 0 0 !important;
            padding: 20px;
        }
        .btn-primary {
            background-color: #198754;
            border-color: #198754;
        }
        .btn-primary:hover {
            background-color: #157347;
            border-color: #157347;
        }
        a {
            color: #198754;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5 mb-5">
                <div class="card-header text-center">
                    <h4 class="mb-0">Daftar Akun Pembeli</h4>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="daftar_pembeli_act.php">
                        <div class="mb-3">
                            <label for="nama_pengguna" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Masukkan nama lengkap Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="email_pengguna" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email_pengguna" name="email_pengguna" placeholder="Masukkan email Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_pengguna" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password_pengguna" name="password_pengguna" placeholder="Masukkan password Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="telepon_pengguna" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="telepon_pengguna" name="telepon_pengguna" placeholder="Masukkan nomor telepon Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_pengguna" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat_pengguna" name="alamat_pengguna" rows="3" placeholder="Masukkan alamat lengkap Anda" required></textarea>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        Sudah punya akun? <a href="index.php?page=login_pembeli">Login di sini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>