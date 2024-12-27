<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<?php if(session()->get('login')): ?>
    <div class="alert alert-success">
    Selamat Datang Saudara/Saudari <strong><?= session()->get('nama');?>.</strong>
    </div>
    <?php endif; ?>
    
    <div class="p-5 text-center bg-white rounded-3 shadow-sm">
        <h1 class="text-body-emphasis">Sistem Data Guru Smk Negeri 6 Tjt</h1>
        <p class="lead">
            Selamat Data Di Aplikasi Sistem Data Guru Smk Negeri 6 Tanjung Jabung Timur
        </p>
    </div>
    <?= $this->endSection(); ?>