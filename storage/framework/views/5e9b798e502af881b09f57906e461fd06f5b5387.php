<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esercizio live</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href=" <?php echo e(route('home')); ?> ">Home</a></li>
            <li><a href=" <?php echo e(route('about')); ?> ">About</a></li>
            <li><a href=" <?php echo e(route('students')); ?> ">Students</a></li>
        </ul>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH C:\Laravel\live-24\resources\views/layouts/main.blade.php ENDPATH**/ ?>