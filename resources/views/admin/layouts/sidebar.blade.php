<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="images/icon/admin.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{  ucfirst(auth::User()->name) }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        {{-- <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Car Advertisements</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('cars.index') }}"><i class="fa fa-circle-o"></i>Publish</a></li>
                    <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> Categories</a></li>
                    <li><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o"></i>Brands</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Employees</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i>Users</a></li>
                    <li><a href="{{ route('user.create') }}"><i class="fa fa-circle-o"></i>Employee Register</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Permission</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('permission.index') }}"><i class="fa fa-circle-o"></i>Permission</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Roles</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i>Roles</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                <i class="fa fa-user"></i>
                <span>Messages</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('message.index') }}"><i class="fa fa-circle-o"></i>Show</a></li>
                </ul>
            </li>
        </ul> --}}

    </section>
    <!-- /.sidebar -->
</aside>