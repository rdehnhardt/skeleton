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

<body class="@yield('page-name')">
    @include('back::partials.navbar')

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

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="text-xs-center text-sm-center text-md-right text-lg-right">
                <!-- PLEASE, DONT REMOVE -->
                by <a href="https://github.com/rdehnhardt" target="_blank">rdehnhardt</a>
            </div>
        </div>
    </footer>

    <script src="{{ elixir('js/back.js') }}"></script>
</body>
</html>
