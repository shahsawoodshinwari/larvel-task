<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-body-tertiary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <?php echo e(config('app.name', 'Laravel')); ?>

            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="excels">
                            <img src="<?php echo e(asset('icons/excel.svg')); ?>" width="25" alt="excels">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?php echo e(route('upload-excel.create')); ?>">Upload</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('upload-excel.index')); ?>">View All</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="products">
                            <img src="<?php echo e(asset('icons/products.svg')); ?>" width="25" alt="products">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?php echo e(route('products.create')); ?>">Upload</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('products.index')); ?>">View All</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-5">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH /var/www/laravel-task/resources/views/layouts/app.blade.php ENDPATH**/ ?>