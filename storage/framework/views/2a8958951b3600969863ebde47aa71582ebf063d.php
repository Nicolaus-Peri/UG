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
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    <?php echo $__env->make('layouts.backend-include.navbar_member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- /.navbar -->
  <!-- SIDEBAR -->
  <?php echo $__env->make('layouts.backend-include.sidebar_member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- / .sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Profile</h1>
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
</body>
</html><?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/layouts/backend-profile/app.blade.php ENDPATH**/ ?>