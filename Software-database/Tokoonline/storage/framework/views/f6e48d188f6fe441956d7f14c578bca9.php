
<?php $__env->startSection('content'); ?>
<!-- contentAwal -->

<h3> <?php echo e($judul); ?> </h3>
<p>
    Selamat Datang, <b><?php echo e(Auth::user()->nama); ?></b> pada aplikasi Toko Online dengan hak 
akses yang anda miliki sebagai
    <b>
        <?php if(Auth::user()->role ==1): ?>
        Super Admin
        <?php elseif(Auth::user()->role ==0): ?>
        Admin
        <?php endif; ?>
    </b>
    ini adalah halaman utama dari aplikasi ini.
</p>

<!-- contentAkhir -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.v_layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tokoonline\resources\views/backend/v_beranda/index.blade.php ENDPATH**/ ?>