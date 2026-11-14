<?php $__env->startSection('title', 'Masuk — PT Solusi Net Nusantara'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('partials.page-header', [
        'eyebrow' => 'Akun',
        'title' => 'Masuk ke Akun Anda',
        'subtitle' => 'Masuk untuk mengajukan langganan layanan internet kami.',
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section class="py-5">
        <div class="container">
            <div class="card border-0 shadow-sm mx-auto" style="max-width: 440px;">
                <div class="card-body p-4">
                    <h1 class="h5 fw-bold mb-3"><i class="fa-solid fa-right-to-bracket me-2"></i>Masuk</h1>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
                        <div class="alert alert-danger"><?php echo e($errors->first()); ?></div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <form action="<?php echo e(route('login.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="email@contoh.com" autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Kata sandi Anda">
                        </div>

                        <div class="form-check mb-3">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                            <label for="remember" class="form-check-label">Ingat saya</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Masuk</button>
                    </form>

                    <p class="text-center small mt-3 mb-0">Belum punya akun? <a href="<?php echo e(route('register')); ?>" class="fw-semibold">Daftar sekarang</a></p>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PT-Koneksi-Net-Nusantara\PT-Koneksi-Net-Nusantara\resources\views/auth/login.blade.php ENDPATH**/ ?>