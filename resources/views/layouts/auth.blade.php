@extends('empty')

@section('body')
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo-white.png" height="30" />
                </a>
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color="black " data-image="/img/full-screen-image-{{ $background }}.jpg">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer footer-transparent">
                <div class="container">
                    <p class="copyright pull-right">
                        &copy; {{ date('Y') }} - <a href="https://github.com/rdehnhardt">rdehnhardt</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
@endsection