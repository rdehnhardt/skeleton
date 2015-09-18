var elixir = require('laravel-elixir');

elixir(function (mix) {

    mix.copy('bower_components/bootstrap-daterangepicker/daterangepicker.css', 'bower_components/bootstrap-daterangepicker/daterangepicker.scss');

    /**
     * Back
     */
    mix.sass('back.scss', "public/css/back.css");

    mix.scripts([
        "bower_components/jquery/dist/jquery.js",
        "bower_components/jquery.easing/js/jquery.easing.js",
        "bower_components/bootstrap-sass/assets/javascripts/bootstrap.js",
        "bower_components/sweetalert/dist/sweetalert.min.js",
        "bower_components/moment/moment.js",
        "bower_components/bootstrap-daterangepicker/daterangepicker.js",
        "bower_components/data-ajax-content/jquery.ajax-content.js",
        "bower_components/jquery-form/jquery.form.js",
        "bower_components/Chart.js/Chart.js"
    ], 'public/js/back/vendor.js', './');

    mix.scripts([
        "back/**/*.js"
    ], 'public/js/back/app.js', 'resources/assets/js');

    /**
     * Front
     */
    mix.sass('front.scss', "public/css/front.css");

    mix.scripts([
        "jquery/dist/jquery.js",
        "jquery.easing/js/jquery.easing.js",
        "bootstrap-sass/assets/javascripts/bootstrap.js"
    ], 'public/js/front/vendor.js', 'bower_components');

    mix.scripts([
        "front/**/*.js"
    ], 'public/js/front/app.js', 'resources/assets/js');

    /**
     * Auth
     */
    mix.sass('auth.scss', "public/css/auth.css");

    mix.scripts([
        "jquery/dist/jquery.js",
        "jquery.easing/js/jquery.easing.js",
        "bootstrap-sass/assets/javascripts/bootstrap.js"
    ], 'public/js/auth/vendor.js', 'bower_components');

    mix.scripts([
        "auth/**/*.js"
    ], 'public/js/auth/app.js', 'resources/assets/js');

    /**
     * Version
     */
    mix.version([
        "css/front.css",
        "css/back.css",
        "css/auth.css",

        "js/back/vendor.js",
        "js/back/app.js",

        "js/auth/vendor.js",
        "js/auth/app.js",

        "js/front/vendor.js",
        "js/front/app.js"
    ]);

    mix.copy('bower_components/font-awesome/fonts', 'public/build/fonts');
});
