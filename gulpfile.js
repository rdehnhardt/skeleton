const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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
