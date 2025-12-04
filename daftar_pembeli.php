<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h4>Daftar Akun Pembeli</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="daftar_pembeli_act.php">
                        <div class="mb-3">
                            <label for="nama_pengguna" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" required>
                        </div>
                        <div class="mb-3">
                            <label for="email_pengguna" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email_pengguna" name="email_pengguna" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_pengguna" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password_pengguna" name="password_pengguna" required>
                        </div>
                        <div class="mb-3">
                            <label for="telepon_pengguna" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="telepon_pengguna" name="telepon_pengguna" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_pengguna" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat_pengguna" name="alamat_pengguna" rows="3" required></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Daftar</button>
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