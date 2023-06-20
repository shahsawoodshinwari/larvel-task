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
    <nav class="navbar bg-body-tertiary shadow-sm">
        <div class="container justify-content-center">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <?php echo e(config('app.name', 'Laravel')); ?>

            </a>
        </div>
    </nav>
    <main class="py-5">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH /var/www/laravel-task/resources/views/layouts/app.blade.php ENDPATH**/ ?>