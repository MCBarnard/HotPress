<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{ asset('admin/adminlte/img/logo/logo.png') }}" alt="" /></a>
            <strong><img src="{{ asset('admin/adminlte/img/logo/logosn.png') }}" alt="" /></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="{{ Request::is('*/jobs/*') ? 'active' : '' }}">
                        <a class="has-arrow" href="index.html">
                            <i class="fa fa-cog text-yellow" aria-hidden="true"></i>
                            <span class="mini-click-non">Jobs</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Jobs In Progress" href="{{ route('admin.jobs.inProgress') }}"><span class="mini-sub-pro">In Progress</span></a></li>
                            <li><a title="Jobs completed" href="{{ route('admin.jobs.completed') }}"><span class="mini-sub-pro">Completed</span></a></li>
                            <li><a title="Jobs Queued" href="{{ route('admin.jobs.queued') }}"><span class="mini-sub-pro">Booked</span></a></li>
                            <li><a title="Jobs Cancelled" href="{{ route('admin.jobs.cancelled') }}"><span class="mini-sub-pro">Cancelled</span></a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('*/stock/*') ? 'active' : '' }}">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i class="fa fa-stack-overflow text-green" aria-hidden="true"></i>
                            <span class="mini-click-non">Inventory</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="{{ route('admin.stock.all') }}"><span class="mini-sub-pro">View All</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
