
<?php $__env->startSection('title',  'Data Member'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('Member.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
    <?php echo $__env->make('Member.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend-member.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/Member/index.blade.php ENDPATH**/ ?>