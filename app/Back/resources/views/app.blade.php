<!DOCTYPE html>
<html lang="en" class="{{ config('app.env') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Renato Dehnhardt <https://github.com/rdehnhardt>">
    <link rel="icon" href="../../favicon.ico">

    <title>Skeleton :: Back</title>

    <link href="{{ elixir('css/back.css') }}" rel="stylesheet"/>
</head>

<body class="@yield('module')">
    @include('back::partials.navbar')

    <header>
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        			@yield('page-title')
        		</div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right">
                    @yield('page-actions')
                </div>
        	</div>
        </div>
    </header>

    <div class="container-fluid @yield('page-name')">
        <div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @include('back::partials.messages')
                @include('back::partials.errors')
                @yield('content')
        	</div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="text-right">
                by <a href="https://github.com/rdehnhardt" target="_blank">rdehnhardt</a>
            </div>
        </div>
    </footer>

    <script src="{{ elixir('js/back.js') }}"></script>
</body>
</html>
