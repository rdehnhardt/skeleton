<div class="sidebar" data-color="black" data-image="/img/full-screen-image-{{ $background }}.jpg">
    <div class="logo">
        <a href="{{ route('back.dashboard') }}" class="logo-text">
            <img src="/img/logo-white.png" height="40"/>
        </a>
    </div>

    <div class="logo logo-mini">
        <a href="{{ route('back.dashboard') }}" class="logo-text">
            <img src="/img/icon.png" width="40"/>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <a href="{{ route('back.profile') }}">
                <div class="photo">
                    <img src="{{Auth::user()->picture != NULL ? '/storage/profile/' : '/images/default-profile.png'}}{{ Auth::user()->picture }}" alt="{{ Auth::user()->name }}"/>
                </div>
            </a>

            <div class="info">
                <a href="/">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <ul class="nav">
            <li class="{{ Route::is('back.contacts.index') ? 'active' : '' }}">
                <a href="{{ route('back.contacts.index') }}">
                    <i class="fa fa-address-book"></i>
                    <p>@lang('dictionary.contacts')</p>
                </a>
            </li>

            <li class="{{ Route::is('back.users.index') ? 'active' : '' }}">
                <a href="{{ route('back.users.index') }}">
                    <i class="fa fa-users"></i>
                    <p>@lang('dictionary.users')</p>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}">
                    <i class="fa fa-sign-out"></i>
                    <p>@lang('dictionary.logout')</p>
                </a>
            </li>
        </ul>
    </div>
</div>
