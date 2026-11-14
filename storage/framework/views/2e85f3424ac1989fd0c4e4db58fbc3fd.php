<?php $__env->startSection('title', 'PT Solusi Net Nusantara — Internet & Jaringan Terpercaya'); ?>

<?php $__env->startSection('content'); ?>

    <section class="py-5 bg-primary text-white">
        <div class="container py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge text-bg-light mb-3">Jasa Layanan Internet &amp; Jaringan</span>
                    <h1 class="display-5 fw-bold mb-3">Koneksi Internet Stabil &amp; Terpercaya untuk Rumah &amp; Bisnis</h1>
                    <p class="lead mb-4">PT Solusi Net Nusantara menyediakan layanan internet broadband, instalasi jaringan, dan maintenance dengan tim teknisi berpengalaman di seluruh area operasional kami.</p>
                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-light fw-semibold">Lihat Layanan</a>
                        <a href="<?php echo e(route('contact.index')); ?>" class="btn btn-outline-light">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <div class="text-primary fw-bold small text-uppercase">Tentang Kami</div>
                <h2 class="h3 fw-bold">Kenapa Pilih Solusi Net Nusantara?</h2>
                <p class="text-muted">Beberapa alasan pelanggan mempercayakan jaringan internetnya kepada kami.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="border-start border-primary border-3 ps-3">
                        <div class="fw-semibold mb-1">Koneksi Stabil</div>
                        <p class="text-muted small mb-0">Jaringan dipantau rutin agar internet tetap lancar setiap hari.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="border-start border-primary border-3 ps-3">
                        <div class="fw-semibold mb-1">Instalasi Cepat</div>
                        <p class="text-muted small mb-0">Tim teknisi siap memasang jaringan baru dalam waktu singkat.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="border-start border-primary border-3 ps-3">
                        <div class="fw-semibold mb-1">Harga Bersahabat</div>
                        <p class="text-muted small mb-0">Paket layanan disesuaikan dengan kebutuhan rumah maupun bisnis.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="border-start border-primary border-3 ps-3">
                        <div class="fw-semibold mb-1">Dukungan Responsif</div>
                        <p class="text-muted small mb-0">Tim layanan pelanggan siap membantu setiap kendala jaringan.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="<?php echo e(route('about')); ?>" class="btn btn-outline-primary">Selengkapnya Tentang Kami</a>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <div class="text-primary fw-bold small text-uppercase">Kategori</div>
                <h2 class="h3 fw-bold">Jelajahi Kategori Layanan</h2>
                <p class="text-muted">Layanan dikelompokkan supaya lebih mudah Anda pilih sesuai kebutuhan.</p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 justify-content-center">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="col">
                        <a href="<?php echo e(route('products.index', ['kategori' => $category->slug])); ?>" class="text-decoration-none">
                            <div class="card h-100 text-center border-0 shadow-sm">
                                <div class="card-body">
                                    <h3 class="h6 fw-semibold text-dark mb-1"><?php echo e($category->name); ?></h3>
                                    <span class="text-muted small"><?php echo e($category->products_count); ?> layanan</span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <p class="text-muted">Belum ada kategori yang ditambahkan.</p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <div class="text-primary fw-bold small text-uppercase">Layanan Unggulan</div>
                <h2 class="h3 fw-bold">Layanan Pilihan Kami</h2>
                <p class="text-muted">Beberapa layanan yang paling banyak diminati pelanggan.</p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php echo $__env->make('partials.product-card', ['product' => $product], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <p class="text-muted">Belum ada layanan. Tambahkan layanan lewat panel admin.</p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div class="text-center mt-4">
                <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">Lihat Semua Layanan</a>
            </div>
        </div>
    </section>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($galleries->isNotEmpty()): ?>
        <section class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="text-primary fw-bold small text-uppercase">Galeri</div>
                    <h2 class="h3 fw-bold">Aktivitas &amp; Dokumentasi Kami</h2>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="<?php echo e($item->image_url); ?>" alt="<?php echo e($item->title); ?>" class="card-img-top" style="height: 180px; object-fit: cover;">
                                <div class="card-body">
                                    <h3 class="h6 fw-semibold mb-0"><?php echo e($item->title); ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>

                <div class="text-center mt-4">
                    <a href="<?php echo e(route('gallery.index')); ?>" class="btn btn-outline-primary">Lihat Semua Galeri</a>
                </div>
            </div>
        </section>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <section class="py-5 bg-primary text-white">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div>
                <h2 class="h4 fw-bold mb-1">Siap berlangganan internet di tempat Anda?</h2>
                <p class="mb-0 opacity-75">Daftar akun, pilih layanan, dan ajukan langganan hanya dalam beberapa langkah.</p>
            </div>
            <a href="<?php echo e(route('products.index')); ?>" class="btn btn-light fw-semibold">Ajukan Langganan</a>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PT-Koneksi-Net-Nusantara\PT-Koneksi-Net-Nusantara\resources\views/home.blade.php ENDPATH**/ ?>