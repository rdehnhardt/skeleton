<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/back">Skeleton</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('back') }}">{{ trans('back::dictionary.home') }}</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('back::dictionary.system') }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('back.system.users.index') }}">{{ trans('back::system.user.title') }}</a></li>
                    </ul>
                </li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>