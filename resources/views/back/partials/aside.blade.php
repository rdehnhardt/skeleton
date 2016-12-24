<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Gravatar::src(Auth::user()->email, 45) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#">{{ Auth::user()->role->name }}</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">{{ strtoupper(trans('back.aside.title')) }}</li>
            <li>
                <a href="/back">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ trans('back.home.title') }}</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span>{{ trans('back.system.title') }}</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/back/system/users"><i class="fa fa-users"></i> {{ trans('back.system.users.title') }}</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>