<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
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
        <ul class="sidebar-menu">
            <li class="header">@lang('global.user-management.menu')</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>@lang('global.app_dashboard')</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-sticky-note-o"></i>
                    <span>@lang('global.posts.title')</span></a>
            </li>

            <li><a href="#">
                    <i class="fa fa-list-ul"></i>
                    <span>@lang('global.categories.title')</span></a>
            </li>


            <li><a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('global.users.title')</span></a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>