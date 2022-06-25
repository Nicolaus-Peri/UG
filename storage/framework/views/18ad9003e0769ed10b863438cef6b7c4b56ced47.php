
<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('Profile.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend-profile.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/Profile/index.blade.php ENDPATH**/ ?>