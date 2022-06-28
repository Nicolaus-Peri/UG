<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- STYLESHEET -->
  <?php echo $__env->make('layouts.backend-register.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<!-- REGISTER -->
<?php echo $__env->yieldContent('content'); ?>
<!-- /.register-box -->

<!-- JAVASCRIPT -->
<?php echo $__env->make('layouts.backend-register.javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/layouts/backend-register/app.blade.php ENDPATH**/ ?>