var elixir = require('laravel-elixir');

elixir.config.publicPath = './../../../public';
elixir.config.assetsPath = 'assets';

elixir(function (mix) {
    mix.sass('back.scss');

    mix.version([
        'css/back.css'
    ]);
});