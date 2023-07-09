<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #27292A;">
    <!-- Brand Logo -->
    <a href="view" class="brand-link">
        <img src="/images/logo1.png" alt="logo" class="logo">

    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #27292A;">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <!-- <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a> -->
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="user" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.transactions.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tren-pendapatan-tahunan.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tren Pendapatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.grafik-penjualan-games.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Grafik Penjualan Games</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.games.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Games</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
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
