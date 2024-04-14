<?php $session = session(); ?>
<h2>Selamat datang, <?= $session->get('user_name') ?></h2>
<a href="<?= base_url('/logout') ?>">Logout</a>
