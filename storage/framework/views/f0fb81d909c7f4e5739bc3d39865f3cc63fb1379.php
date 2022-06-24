;

<?php $__env->startSection('content'); ?>
    <h1>Students</h1>
    <h3><?php echo e($student->name); ?> <?php echo e($student->surname); ?> <?php echo e($student->id); ?></h3>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul>
            <li><?php echo e($student->id); ?></li>
            <li><?php echo e($student->name); ?> <?php echo e($student->surname); ?></li>
            <li>Matricola: <?php echo e($student->registration_number); ?></li>
        </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\live-24\resources\views/students.blade.php ENDPATH**/ ?>