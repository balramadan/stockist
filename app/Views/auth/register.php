<div class="flex flex-row w-full min-h-screen justify-around">
    <div class="hidden lg:flex flex-col bg-red-500 text-white justify-between lg:p-8 xl:p-12 lg:max-w-sm xl:max-w-lg">
        <div class="flex items-center justify-start space-x-3">
            <a href="#" class="font-medium text-xl">Stockist</a>
        </div>
        <div class='space-y-5'>
            <h1 class="lg:text-3xl xl:text-5xl xl:leading-snug font-extrabold">Permudah pencatatan stok di gudang</h1>
            <p class="text-lg">Sudah punya akun? <a href="<?= base_url('login') ?>">Login disini</a></p>
            <!-- <button class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium border-black bg-black text-white">Login disini</button> -->
        </div>
        <p class="font-medium">© 2024 Stockist</p>
    </div>
    <div class="flex flex-1 flex-col justify-center space-y-5 max-w-md">
        <div class="flex flex-col space-y-2 text-center">
            <h2 class="text-3xl md:text-4xl font-bold">Sign Up</h2>
            <?php if(isset($validation)): ?>
            <div class="px-4 py-3 bg-red-500 text-white"><?= $validation->listErrors(); ?></div>
            <?php endif; ?>
        </div>
        
        <form action="<?= base_url() ?>regadmin/save" method="post">
            <div class="flex flex-col max-w-md space-y-3 mb-3">
                <label for="InputForName" class="form-label">Name</label>
                <input type="text" name="name" id="InputForName" class="form-control flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" value="<?= set_value('name') ?>">
            </div>
            <div class="flex flex-col max-w-md space-y-3 mb-3">
                <label for="InputForEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" id="InputForEmail" value="<?= set_value('email') ?>">
            </div>
            <div class="flex flex-col max-w-md space-y-3 mb-3">
                <label for="InputForPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" id="InputForPassword">
            </div>
            <div class="flex flex-col max-w-md space-y-3 mb-3">
                <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                <input type="password" name="confirm-password" class="form-control flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" id="InputForConfPassword">
            </div>
            <button type="submit" class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-black bg-black text-white">Register</button>
        </form>
    </div>
</div>