var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');

// Configs
elixir.config.publicPath = './../../../public';
elixir.config.assetsPath = 'assets';
elixir.config.images = {
    folder: elixir.config.assetsPath + '/img',
    outputFolder: elixir.config.publicPath + '/build/back/img'
};

// Elixir
elixir(function (mix) {
    //mix.sass('back.scss');
    //mix.version(['css/back.css']);

    mix.imagemin({
        optimizationLevel: 3,
        progressive: true,
        interlaced: true
    });
});