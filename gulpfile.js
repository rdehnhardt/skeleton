const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {
    /* COPY */
    mix.copy('./bower_components/AdminLTE/bootstrap/fonts', 'public/build/fonts');
    mix.copy('./bower_components/AdminLTE/plugins/iCheck/square/blue.png', 'public/build/css/blue.png');
    
    /* BACK */
    mix.sass('back.sass');
    mix.webpack('back.js', 'public/js/back.js');
    mix.scripts([
        "./bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js",
        "./bower_components/AdminLTE/bootstrap/js/bootstrap.min.js",
        "./bower_components/AdminLTE/plugins/fastclick/fastclick.js",
        "./bower_components/AdminLTE/dist/js/app.min.js",
        "./bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js",
        "./bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
        "./bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js",
        "./bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js",
        "./bower_components/AdminLTE/plugins/chartjs/Chart.min.js"
    ], 'public/js/vendor-back.js');
    
    /* AUTH */
    mix.sass('auth.sass');
    mix.webpack('auth.js', 'public/js/auth.js');
    mix.scripts([
        './bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js',
        './bower_components/AdminLTE/bootstrap/js/bootstrap.min.js',
        './bower_components/AdminLTE/plugins/iCheck/icheck.js'
    ], 'public/js/vendor-auth.js');

    /* FRONT */
    mix.sass('front.sass');
    mix.webpack('front.js', 'public/js/front.js');
    mix.scripts([
    ], 'public/js/vendor-front.js');

    mix.version([
        'js/vendor-auth.js',
        'css/auth.css',
        'js/auth.js',

        'js/vendor-back.js',
        'css/back.css',
        'js/back.js'
    ]);
});
