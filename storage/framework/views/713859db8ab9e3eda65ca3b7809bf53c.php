<?php $__env->startSection('title', 'Langganan Saya — PT Solusi Net Nusantara'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('partials.page-header', [
        'eyebrow' => 'Akun',
        'title' => 'Langganan Saya',
        'subtitle' => 'Daftar pengajuan langganan yang pernah Anda kirimkan.',
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section class="py-5">
        <div class="container">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($subscriptions->isEmpty()): ?>
                <p class="text-muted">Anda belum mengajukan langganan apa pun. <a href="<?php echo e(route('products.index')); ?>">Lihat layanan kami</a>.</p>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-hover align-middle bg-white shadow-sm">
                        <thead class="table-light">
                            <tr>
                                <th>Layanan</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Konfirmasi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <tr>
                                    <td><?php echo e($item->product->name ?? '-'); ?></td>
                                    <td><?php echo e($item->phone); ?></td>
                                    <td><?php echo e($item->address); ?></td>
                                    <td>
                                        <?php
                                            $badgeClass = match ($item->status) {
                                                'approved' => 'text-bg-success',
                                                'rejected' => 'text-bg-danger',
                                                'active' => 'text-bg-success',
                                                'non_active' => 'text-bg-secondary',
                                                default => 'text-bg-warning',
                                            };
                                        ?>
                                        <span class="badge <?php echo e($badgeClass); ?>"><?php echo e($item->status_label); ?></span>
                                    </td> 
                                    <td>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($item->status === 'approved' || $item->status === 'non_active'): ?>
                                    <a href="https://wa.me/083898645908" class="btn btn-outline-primary btn-sm rounded-circle" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </td>
                                    <td><?php echo e($item->created_at->format('d M Y')); ?></td>
                                </tr>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PT-Koneksi-Net-Nusantara\PT-Koneksi-Net-Nusantara\resources\views/subscriptions/index.blade.php ENDPATH**/ ?>