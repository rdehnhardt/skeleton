var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');

var root = './../../../';
var module = '/back';

// Configs
elixir.config.publicPath = root + 'public';
elixir.config.assetsPath = 'assets';
elixir.config.production = true;
elixir.config.images = {
    outputFolder: elixir.config.publicPath + '/build/images' + module,
    folder: elixir.config.assetsPath + '/images'
};

// Elixir
elixir(function (mix) {
    mix.sass('back.scss');

    mix.version(['css/back.css']);

    mix.imagemin({
        optimizationLevel: 3,
        progressive: true,
        interlaced: true
    });

    mix.copy(root + 'bower_components/font-awesome/fonts', elixir.config.publicPath + '/build/fonts/');
});