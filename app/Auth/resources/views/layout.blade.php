<!DOCTYPE html>
<html lang="en" class="{{ config('app.env') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Application back skeleton">
    <meta name="author" content="Renato Dehnhardt <renatotkd@gmail.com">
    <link rel="icon" href="../../favicon.ico">

    <title>Skeleton :: Auth</title>

    <link href="{{ elixir('css/back.css') }}" rel="stylesheet">
</head>

<body class="@yield('page-name')">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @include('back::partials.messages')
                @include('back::partials.errors')

                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ elixir('js/back.js') }}"></script>
</body>
</html>
