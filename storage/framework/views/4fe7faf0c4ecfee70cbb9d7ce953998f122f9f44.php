  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo e(asset('assets/AdminLTE/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Underground Fitness</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo e(url('/dashboard')); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>   
          <li class="nav-item">
            <a href="<?php echo e(route('app.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                App
              </p>
            </a>
          </li>            
          <li class="nav-item">
            <a href="<?php echo e(route('member.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Member
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('trainer.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Trainer List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('news.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                News
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('jadwal.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('transactionlist.index')); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Transacion List
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\xampp\htdocs\undergroundblog\resources\views/layouts/backend-include/sidebar.blade.php ENDPATH**/ ?>