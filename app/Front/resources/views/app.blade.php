<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>{{ config('app.name') }} :: {{ config('app.description') }}</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <script>
            var _bc = _bc || [];

            (function () {
                var bc = document.createElement('script');
                bc.src = '/analytics.js';
                bc.type = 'text/javascript';
                bc.async = true;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(bc, s);
            })();
        </script>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                letter-spacing: -4px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .quote {
                font-size: 24px;
                color: #6bb0d3;
            }

            a {
                text-decoration: none;
                font-weight: bold;
                font-size: 24px;
                color: #6bb0d3;
            }

            a:hover {
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>

