<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if (!Auth::guest())
        <meta name="api-token" content="{{ Auth::user()->api_token }}">
    @endif

    <link href="{{ mix('css/theme.css') }}" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    @stack('styles')

    <!-- Scripts -->
    @if (Auth::guest())
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    @else
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
                'apiToken' => Auth::user()->api_token
            ]) !!};
        </script>
    @endif
</head>
<body>
    <div id="app">
        @yield('body')
    </div>

    <script src="{{ mix('js/theme.js') }}"></script>
    @stack('scripts')
    @yield('page-scripts')
</body>
</html>