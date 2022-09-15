<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- STYLESHEET -->
  <?php echo $__env->make('layouts.backend-include.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- NAVBAR -->
  <?php echo $__env->make('layouts.backend-include.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- SIDEBAR -->
  <?php echo $__env->make('layouts.backend-include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Data Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/member')); ?>">Member</a></li>
              <li class="breadcrumb-item active">Create Data Member</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- FOOTER -->
  <?php echo $__env->make('layouts.backend-include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- JAVASCRIPT -->
<?php echo $__env->make('layouts.backend-include.javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/layouts/backend-member/create_member.blade.php ENDPATH**/ ?>