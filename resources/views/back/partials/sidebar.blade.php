<div class="sidebar" data-color="black" data-image="/img/full-screen-image-{{ $background }}.jpg">
    <div class="logo">
        <a href="/" class="logo-text">
            <img src="/img/logo-white.png" height="40"/>
        </a>
    </div>

    <div class="logo logo-mini">
        <a href="/" class="logo-text">
            <img src="/img/icon.png" width="40"/>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <a href="/">
                <div class="photo">
                    <img src="/storage/profile/{{ Auth::user()->picture }}" alt="{{ Auth::user()->name }}"/>
                </div>
            </a>

            <div class="info">
                <a href="/">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <ul class="nav">
            <li class="{{ Route::is('restricted.users') ? 'active' : '' }}">
                <a href="/">
                    <i class="fa fa-users"></i>
                    <p>@lang('dictionary.users')</p>
                </a>
            </li>

            <li>
                <a href="/">
                    <i class="fa fa-sign-out"></i>
                    <p>@lang('dictionary.logout')</p>
                </a>
            </li>
        </ul>
    </div>
</div>