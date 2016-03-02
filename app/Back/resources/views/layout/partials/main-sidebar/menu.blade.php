<ul class="sidebar-menu">
    <li class="header">{{ trans('back::dictionary.main-menu') }}</li>
    <li>
        <a href="{{ route('back.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>{{ trans('back::dashboard.title') }}</span>
        </a>
    </li>
    <li class="treeview {{ Request::is('home') ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-cogs"></i>
            <span>{{ trans('back::system.title') }}</span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('back.system.users.index') }}"><i class="fa fa-circle-o"></i> {{ trans('back::system.user.title') }}</a></li>
        </ul>
    </li>
</ul>