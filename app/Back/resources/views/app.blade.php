<!DOCTYPE html>
<html lang="en" class="{{ config('app.env') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Application back skeleton">
    <meta name="author" content="Renato Dehnhardt <renatotkd@gmail.com">
    <link rel="icon" href="../../favicon.ico">

    <title>Skeleton :: Back</title>

    <link href="{{ elixir('css/back.css') }}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-light bg-white">
    <a class="navbar-brand" href="#">Skeleton</a>

    <ul class="nav navbar-nav pull-xs-right pull-sm-right pull-md-right pull-lg-right">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('back') }}">
                <i class="fa fa-home"></i> Home <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('back.components') }}">Components</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 title">
                        @yield('page-title')
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 actions">
                        <div class="text-xs-center text-sm-center text-md-right text-lg-right">
                            @yield('page-actions')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

<footer>
    <div class="container-fluid">
        <div class="text-xs-center text-sm-center text-md-right text-lg-right">
            powered by <a href="https://github.com/rdehnhardt" target="_blank">rdehnhardt</a>
        </div>
    </div>
</footer>
</body>
</html>
