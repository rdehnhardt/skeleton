<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ elixir('css/back.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('back.partials.header')
    @include('back.partials.aside')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>@yield('title')</h1>

            @yield('breadcrumbs')
        </section>

        <section class="content">
            @include('back.partials.messages')

            @yield('content')
        </section>
    </div>

    @include('back.partials.footer')
</div>

<script src="{{ elixir('js/vendor-back.js') }}"></script>
</body>
</html>
