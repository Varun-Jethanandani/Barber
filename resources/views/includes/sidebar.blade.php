<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"></div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search " action="#" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>

            <!-- *********************************************************************-->
            <!--                        SIDEBAR PILLS                                 -->
            <!-- *********************************************************************-->

            <!-- DASHBOARD PILL -->
            <li class="nav-item start {{Request::is('dashboard') ? 'open active' : ''}}">
                <a href="/dashboard" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item start {{Request::is('services') ? 'open active' : ''}}">
                <a href="/services" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Add Services</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item start {{Request::is('packages') ? 'open active' : ''}}">
                <a href="/packages" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Add Packages</span>
                    <span class="selected"></span>
                </a>
            </li>

            <!-- END OF DASHBOARD PILL -->
            <!-- Teacher Pills -->
            <li class="nav-item  {{ Request::is('teacher*') ? 'open active' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-user"></i>
                    <span class="title">Customer</span>
                    <span class="arrow {{ Request::is('teacher*') ? 'open' : '' }}"></span>
                </a>
                <ul class="sub-menu">
                    <!-- ADD ADMIN PILL-->
                    <li class="nav-item {{ Request::is('teacher/create') ? 'open' : '' }}">
                        <a href="/customer/create" class="nav-link ">
                            <span class="title">Add Customerr</span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('teacher') ? 'open' : '' }}">
                        <a href="/customer" class="nav-link ">
                            <span class="title">Manage Customer</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!--End of teacher pills -->
            <!-- REPORTS PILLS -->
            
            <!-- END OF REPORTS PILLS -->

    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
