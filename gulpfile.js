var elixir = require('laravel-elixir');

elixir(function (mix) {

    /**
     * Back
     */
    mix.sass('back.scss', "public/css/back.css");

    mix.scripts([
        "node_modules/jquery/dist/jquery.js",
        "node_modules/jquery.easing/jquery.easing.js",
        "node_modules/bootstrap-sass/assets/javascripts/bootstrap.js",
        "node_modules/sweetalert/dist/sweetalert.min.js",
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
        "jquery.easing/jquery.easing.js",
        "bootstrap-sass/assets/javascripts/bootstrap.js"
    ], 'public/js/front/vendor.js', 'node_modules');

    mix.scripts([
        "front/**/*.js"
    ], 'public/js/front/app.js', 'resources/assets/js');

    /**
     * Auth
     */
    mix.sass('auth.scss', "public/css/auth.css");

    mix.scripts([
        "jquery/dist/jquery.js",
        "jquery.easing/jquery.easing.js",
        "bootstrap-sass/assets/javascripts/bootstrap.js"
    ], 'public/js/auth/vendor.js', 'node_modules');

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

    mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts');
});
