<?=$this->extend('layout/template'); ?>
<?=$this->section('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm" style="border-radius: 15px;">
                <div class="card-header text-white text-center" style="background-color: #007bff; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <h3>Login</h3>
                </div>
                <div class="card-body p-4">
                    <form action="<?= base_url('login/submit'); ?>" method="post">
                        <div class="form-group mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                        </div>
                        <button type="submit" class="btn btn-block text-white" style="background-color: #007bff;">Login</button>
                    </form>
                </div>
                <div class="card-footer text-center" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                    <small>Copyright &copy; Ilham Adi Prayoga 2024</small>
                </div>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection(); ?>
