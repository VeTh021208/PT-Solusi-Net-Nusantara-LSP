<section class="bg-light border-bottom py-4">
    <div class="container text-center">
        <span class="badge text-primary bg-primary-subtle mb-2"><?php echo e($eyebrow ?? 'Solusi Net Nusantara'); ?></span>
        <h1 class="h3 fw-bold mb-1"><?php echo e($title); ?></h1>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($subtitle)): ?>
            <p class="text-muted mb-0"><?php echo e($subtitle); ?></p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php /**PATH C:\laragon\www\PT-Koneksi-Net-Nusantara\PT-Koneksi-Net-Nusantara\resources\views/partials/page-header.blade.php ENDPATH**/ ?>