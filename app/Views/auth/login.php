<div class="flex flex-row w-full min-h-screen justify-around">
    <div class="hidden lg:flex flex-col bg-sky-500 text-white justify-between lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg">
        <div class="flex items-center justify-start space-x-3">
            <a href="#" class="font-medium text-xl">Stockist</a>
        </div>
        <div class='space-y-5'>
            <h1 class="text-white lg:text-3xl xl:text-5xl xl:leading-snug font-extrabold">Permudah pencatatan stok di gudang</h1>
            <!-- <p class="text-lg">Sudah punya akun? <a href="<?= base_url('login') ?>">Login disini</a></p> -->
            <!-- <button class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium border-black bg-black text-white">Login disini</button> -->
        </div>
        <p class="font-medium">© 2024 Stockist</p>
    </div>
    <div class="flex flex-1 flex-col justify-center space-y-5 max-w-md">
        <div class="flex flex-col space-y-2 text-center">
            <h1 class="text-3xl md:text-4xl font-bold">Sign In</h1>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="px-4 py-3 bg-red-500 text-white"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
        </div>

        <form action="http://localhost:8080/login/auth" method="post">
            <div class="flex flex-col max-w-md space-y-3 mb-3">
                <label for="InputForEmail" class="form-label text-slate-500">
                    Email Address
                </label>
                <input type="email" name="email" id="InputForEmail" class="form-control bg-white text-black flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal placeholder:text-black" value="<?= set_value('email'); ?>">
            </div>
            <div class="flex flex-col max-w-md space-y-3 mb-3">
                <label for="InputForPassword" class="form-label text-slate-500">
                    Password
                </label>
                <input type="password" name="password" id="InputForPassword" class="form-control bg-white text-black flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal placeholder:text-black" value="<?= set_value('password'); ?>">
            </div>
            <button type="submit" class="flex items-center justify-center flex-none hover:bg-sky-600 hover:border-none ease-in-out duration-300 px-3 py-2 md:px-4 md:py-3 rounded-lg font-medium bg-black text-white">Login</button>
        </form>
    </div>
</div>