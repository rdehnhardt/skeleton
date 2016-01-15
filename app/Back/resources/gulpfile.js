var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');

var root = './../../../';
var module = '/back';

// Configs
elixir.config.publicPath = root + 'public' + module;
elixir.config.assetsPath = 'assets';
elixir.config.production = true;
elixir.config.images = {
    outputFolder: elixir.config.publicPath + '/build/images',
    folder: elixir.config.assetsPath + '/images'
};

// Elixir
elixir(function (mix) {
    mix.sass('app.scss');

    mix.version(['css/app.css']);

    mix.imagemin({
        optimizationLevel: 3,
        progressive: true,
        interlaced: true
    });

    mix.copy(root + 'bower_components/font-awesome/fonts', elixir.config.publicPath + '/build/fonts/');
});