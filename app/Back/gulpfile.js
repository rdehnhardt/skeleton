var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.sass('back.scss', '../../public/css/');

    mix.version([
        '../../../public/css/back.css'
    ], '../public/build/');
});
