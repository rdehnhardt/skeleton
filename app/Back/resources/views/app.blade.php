<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! app('seotools')->generate() !!}
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="{{ elixir('css/back.css') }}"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    @include('back::partials.navbar')
    @include('back::partials.header')

    <main>
        @include('back::partials.messages')
        @include('back::partials.errors')

        @yield('content')
    </main>

    @include('back::partials.footer')

    <script src="{{ elixir('js/back/vendor.js') }}"></script>
    <script src="{{ elixir('js/back/app.js') }}"></script>
</body>
</html>