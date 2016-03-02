<!DOCTYPE html>
<html>
    <head>
        {!! SEO::generate() !!}

        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 300;
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
            }
        </style>

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
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Skeleton</div>
                <a href="/back">Restricted Area</a>
            </div>
        </div>
    </body>
</html>
