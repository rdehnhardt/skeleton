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
        </ul>
    </section>
</aside>