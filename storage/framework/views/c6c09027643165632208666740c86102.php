<?php $__env->startSection('title', 'Galeri Perusahaan — PT Solusi Net Nusantara'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('partials.page-header', [
        'eyebrow' => 'Galeri',
        'title' => 'Galeri Perusahaan',
        'subtitle' => 'Dokumentasi kegiatan instalasi, maintenance, dan aktivitas tim kami di lapangan.',
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="<?php echo e($item->image_url); ?>" alt="<?php echo e($item->title); ?>" class="card-img-top" style="height: 180px; object-fit: cover;">
                            <div class="card-body">
                                <h3 class="h6 fw-semibold mb-1"><?php echo e($item->title); ?></h3>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($item->description): ?>
                                    <p class="text-muted small mb-0"><?php echo e($item->description); ?></p>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <p class="text-muted">Belum ada foto galeri. Tambahkan lewat panel admin.</p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($galleries->hasPages()): ?>
                <nav class="mt-4" aria-label="Navigasi halaman">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item <?php echo e($galleries->onFirstPage() ? 'disabled' : ''); ?>">
                            <a class="page-link" href="<?php echo e($galleries->onFirstPage() ? '#' : $galleries->previousPageUrl()); ?>">Sebelumnya</a>
                        </li>
                        <li class="page-item disabled">
                            <span class="page-link">Halaman <?php echo e($galleries->currentPage()); ?> dari <?php echo e($galleries->lastPage()); ?></span>
                        </li>
                        <li class="page-item <?php echo e($galleries->hasMorePages() ? '' : 'disabled'); ?>">
                            <a class="page-link" href="<?php echo e($galleries->hasMorePages() ? $galleries->nextPageUrl() : '#'); ?>">Selanjutnya</a>
                        </li>
                    </ul>
                </nav>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PT-Koneksi-Net-Nusantara\PT-Koneksi-Net-Nusantara\resources\views/gallery/index.blade.php ENDPATH**/ ?>