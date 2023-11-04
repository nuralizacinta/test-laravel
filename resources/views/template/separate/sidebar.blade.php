<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('adminlte/dist/img/svt logo.png') }}" alt="Seventeen Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('adminlte/dist/img/iu.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('user.profile', Auth::user()->id) }}" class="d-block">{{ Auth::user()->name }}</a>

      </div>
    </div>

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
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
              <span class="right badge badge-danger">soon</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ asset('film') }}" class="nav-link @if(Request::segment(1) == 'film') active @endif">
            <i class="nav-icon fas fa-film"></i>
            <p>
             film
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ asset('genre') }}" class="nav-link @if (Request::segment(1) == 'genre')
            active
          @endif">
            <i class="nav-icon fas fa-book"></i>
            <p>
             genre
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ asset('cast') }}" class="nav-link @if (Request::segment(1) == 'cast')
          active
        @endif">
            <i class="nav-icon fas fa-user"></i>
            <p>
             cast
            </p>
          </a>
        </li>
        <li class="nav-item">
          <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning btn-md nav-link">
              Logout
            </button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>