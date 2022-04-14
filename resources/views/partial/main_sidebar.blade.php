<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('Admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Camera</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý camera
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('places')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý địa điểm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý nhân viên</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('checkin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin Check in</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
