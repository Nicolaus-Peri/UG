
<?php $__env->startSection('title', 'Jadwal'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('Jadwal.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <?php echo $__env->make('Jadwal.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.backend-jadwal.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/Jadwal/index.blade.php ENDPATH**/ ?>