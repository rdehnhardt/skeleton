<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

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
            <h1>Dashboard <small>Version 2.0</small></h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <section class="content">
            @yield('content')
        </section>
    </div>

    @include('back.partials.footer')
</div>

<script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
<script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
<script src="/bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/bower_components/AdminLTE/plugins/chartjs/Chart.min.js"></script>
<script src="/bower_components/AdminLTE/dist/js/pages/dashboard2.js"></script>
<script src="/bower_components/AdminLTE/dist/js/demo.js"></script>
</body>
</html>
