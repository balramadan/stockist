<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb4">Halaman Login!!</h1>
                                </div>
                                <?php if (session()->has('error')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session('error') ?>
                                    </div>
                                <?php endif; ?>
                                <form class="user" method="post" action="<?= base_url('auth/login'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" value="<?= session('old_data') ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Masuk
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?=
                                                            base_url('autentifikasi/lupaPassword'); ?>">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?=
                                                            base_url('auth/register'); ?>">Daftar Member pinjol!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>