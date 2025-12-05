<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h4>Login Pembeli</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="login_pembeli_act.php">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        Belum punya akun? <a href="index.php?page=daftar_pembeli">Daftar di sini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>