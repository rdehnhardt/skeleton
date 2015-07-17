var elixir = require('laravel-elixir');

elixir(function(mix) {

 /**
  * Back
  */
 mix.sass('back.scss', "public/css/back.css");

 mix.scripts([
  "jquery/dist/jquery.js",
  "jquery.easing/jquery.easing.js",
  "bootstrap-sass/assets/javascripts/bootstrap.js"
 ], 'public/js/back/vendor.js', 'node_modules');

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

});
