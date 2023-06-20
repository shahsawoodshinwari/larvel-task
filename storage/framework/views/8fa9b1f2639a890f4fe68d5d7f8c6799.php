<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Uploaded Excel Files</div>
                    <div>
                        <a href="<?php echo e(route('upload-excel.create')); ?>" class="btn btn-sm btn-primary">Upload New</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">File Name</th>
                                <th scope="col">Uploaded At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $uploadedFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uploadedFile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th data-cell="id" scope="row"><?php echo e($loop->iteration); ?></th>
                                <td data-cell="name">
                                    <a href="<?php echo e(route('upload-excel.show', $uploadedFile->id)); ?>"><?php echo e($uploadedFile->original_name); ?></a>

                                    </td>
                                <td data-cell="uploaded_at"><?php echo e($uploadedFile->created_at->diffForHumans()); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="3" class="text-center">
                                    No filese uploaded yet. Click <a href="<?php echo e(route('upload-excel.create')); ?>">here</a> to upload a file.
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php echo e($uploadedFiles->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel-task/resources/views/upload-excel/index.blade.php ENDPATH**/ ?>