  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/profile')}}" class="brand-link">
      <img src="{{asset('assets/AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
            <a href="{{url('/profile')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/transaction')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/trainermember')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Trainer List
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>