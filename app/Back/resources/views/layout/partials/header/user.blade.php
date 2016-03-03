<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="/img/avatars/25/25/{{ Auth::user()->getImage() }}" class="user-image" alt="{{ Auth::user()->name }}">
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="/img/avatars/160/160/{{ Auth::user()->getImage() }}" class="img-circle" alt="{{ Auth::user()->name }}">

            <p>
                {{ Auth::user()->name }} - {{ Auth::user()->role }}
                <small>Member since {{ Auth::user()->created_at->format('m/Y') }}</small>
            </p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="{{ route('get.profile') }}" class="btn btn-default btn-flat">{{ trans('back::dashboard.profile.title') }}</a>
            </div>
            <div class="pull-right">
                <a href="{{ route('logout') }}" class="btn btn-default btn-flat">{{ trans('back::dictionary.logout') }}</a>
            </div>
        </li>
    </ul>
</li>