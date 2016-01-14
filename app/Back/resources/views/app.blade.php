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
    @include('back::navigation')

    @yield('content')
</body>
</html>
