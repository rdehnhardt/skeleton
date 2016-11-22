const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('auth.sass');
    mix.sass('back.sass');
    mix.sass('front.sass');

    mix.webpack('app.js');

    mix.version([
        'css/auth.css',
        'css/back.css',
        'css/front.css'
    ]);
});
