<div class="sidebar" data-color="black" data-image="/img/full-screen-image-{{ $backgroundImage }}.jpg">
    <div class="logo">
        <a href="{{ route('restricted.dashboard') }}" class="logo-text">
            <img src="/img/logo-white.png" height="40"/>
        </a>
    </div>

    <div class="logo logo-mini">
        <a href="{{ route('restricted.dashboard') }}" class="logo-text">
            <img src="/img/icon.png" width="40"/>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <a href="{{ route('restricted.profile') }}">
                <div class="photo">
                    <img src="/storage/profile/{{ Auth::user()->picture }}" alt="{{ Auth::user()->name }}"/>
                </div>
            </a>

            <div class="info">
                <a href="{{ route('restricted.profile') }}">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <ul class="nav">
            <li class="{{ Route::is('restricted.dashboard') ? 'active' : '' }}">
                <a href="{{ route('restricted.dashboard') }}">
                    <i class="fa fa-tachometer"></i>
                    <p>@lang('validation.attributes.dashboard')</p>
                </a>
            </li>

            <li class="{{ Route::is('restricted.users') ? 'active' : '' }}">
                <a href="{{ route('restricted.users') }}">
                    <i class="fa fa-users"></i>
                    <p>@lang('validation.attributes.users')</p>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}">
                    <i class="fa fa-sign-out"></i>
                    <p>@lang('validation.attributes.logout')</p>
                </a>
            </li>
        </ul>
    </div>
</div>