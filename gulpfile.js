const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {

    mix.sass('back.sass');
    mix.sass('front.sass');


    mix.webpack('back.js', 'public/js/back.js');
    mix.webpack('front.js', 'public/js/front.js');

    /* COPY */
mix.copy('./bower_components/AdminLTE/bootstrap/fonts', 'public/build/fonts');
mix.copy('./bower_components/AdminLTE/plugins/iCheck/square/blue.png', 'public/build/css/blue.png');

    /* AUTH */
    mix.sass('auth.sass');
    mix.webpack('auth.js', 'public/js/auth.js');
    mix.scripts([
        './bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js',
        './bower_components/AdminLTE/bootstrap/js/bootstrap.min.js',
        './bower_components/AdminLTE/plugins/iCheck/icheck.js'
    ], 'public/js/vendor-auth.js');

    mix.scripts(['back.js'], 'public/js/vendor-back.js');
    mix.scripts(['front.js'], 'public/js/vendor-front.js');

    mix.version([
        'js/vendor-auth.js',
        'css/auth.css',
        'js/auth.js',

        'css/back.css',
        'css/front.css',



        'js/back.js',
        'js/front.js',
    ]);
});
