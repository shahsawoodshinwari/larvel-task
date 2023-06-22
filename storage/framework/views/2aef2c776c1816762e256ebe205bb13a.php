<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 mb-3">
        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Product-<?php echo e($loop->iteration); ?></h5>
                    <ul class="list-group">
                        <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <b><?php echo e(ucwords(str_replace('_', ' ', $attribute->name))); ?></b>:
                            <span class="float-end"><?php echo e($attribute->pivot->value ?? 'N/A'); ?></span>
                    </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">No Products uploaded</h5>
                    <div class="card-text">
                        Click <a href="<?php echo e(route('upload-excel.create')); ?>">here</a> to upload a new file.
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php echo e($products->links('vendor.pagination.bootstrap-5')); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel-task/resources/views/products/index.blade.php ENDPATH**/ ?>