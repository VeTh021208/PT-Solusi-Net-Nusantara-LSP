<div class="col">
    <a href="<?php echo e(route('products.show', $product->slug)); ?>" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm border-0">
            <div class="bg-primary-subtle d-flex align-items-center justify-content-center" style="height: 160px;">
                <img src="<?php echo e($product->image_url); ?>" alt="<?php echo e($product->name); ?>" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="card-body">
                <span class="badge text-bg-light border"><?php echo e($product->category->name ?? '-'); ?></span>
                <h3 class="h6 fw-semibold mt-2 mb-2"><?php echo e($product->name); ?></h3>
                <div class="fw-bold text-primary">
                    Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?>

                    <span class="fw-normal text-muted small">/ <?php echo e($product->unit); ?></span>
                </div>
            </div>
        </div>
    </a>
</div>
<?php /**PATH C:\laragon\www\PT-Koneksi-Net-Nusantara\PT-Koneksi-Net-Nusantara\resources\views/partials/product-card.blade.php ENDPATH**/ ?>