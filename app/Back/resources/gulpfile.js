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

    mix.scripts([
        root + 'bower_components/jquery/dist/jquery.js',
        root + 'bower_components/tether/dist/js/tether.js',
        root + 'bower_components/bootstrap/dist/js/bootstrap.js',
        root + 'bower_components/Chart.js/Chart.js',
        'assets/js/**/*.js'
    ], elixir.config.publicPath + '/js' + module + '.js');

    mix.version([
        'css/back.css',
        'js/back.js'
    ]);

    mix.imagemin({
        optimizationLevel: 3,
        progressive: true,
        interlaced: true
    });

    mix.copy(root + 'bower_components/font-awesome/fonts', elixir.config.publicPath + '/build/fonts/');
});