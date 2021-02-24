<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <img src="{{ asset('AdminLayout/admin-lte/dist/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">HotPress</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLayout/admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item {{ Route::is('admin.jobs.*') ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ Route::is('admin.jobs.*') ? "active" : "" }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Jobs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.jobs.completed') }}" class="nav-link {{ Route::is('admin.jobs.completed') ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>completed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.jobs.cancelled') }}" class="nav-link {{ Route::is('admin.jobs.cancelled') ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>cancelled</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.jobs.queued') }}" class="nav-link {{ Route::is('admin.jobs.queued') ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booked</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.jobs.inProgress') }}" class="nav-link {{ Route::is('admin.jobs.inProgress') ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>In Progress</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('admin.stock.*') ? "menu-open" : "" }}">
                    <a href="#" class="nav-link {{ Route::is('admin.stock.*') ? "active" : "" }}">
                        <i class="fa fa-shopping-bag text-yellow" aria-hidden="true"></i>
                        <p>
                            Inventory
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.stock.all') }}" class="nav-link {{ Route::is('admin.stock.all') ? "active" : "" }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Stock</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.paymentSettings') }}" class="nav-link {{ Route::is('admin.paymentSettings.*') ? "active" : "" }}">
                        <i class="fa fa-credit-card text-green" aria-hidden="true"></i>
                        <p>
                            Payment Gateway Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('session.logout') }}" class="nav-link">
                        <i class="fa fa-power-off text-danger mr-2" aria-hidden="true"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
