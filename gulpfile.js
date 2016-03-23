var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');

var bower = './bower_components/';

elixir(function (mix) {

    ////////////////////////////////////////////////////////
    //////////////////////// BACK /////////////////////////
    //////////////////////////////////////////////////////
    mix.sass('./app/Back/resources/assets/style/back.scss');

    mix.scripts([
        bower + 'jquery/dist/jquery.js',
        bower + 'jquery-easing-original/jquery.easing.js',
        bower + 'bootstrap-sass/assets/javascripts/bootstrap.js',
        bower + 'salvattore/dist/salvattore.js',
        bower + 'AdminLTE/plugins/bootstrap-slider/bootstrap-slider.js',
        bower + 'AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js',
        bower + 'AdminLTE/plugins/chartjs/Chart.js',
        bower + 'AdminLTE/plugins/ckeditor/ckeditor.js',
        bower + 'AdminLTE/plugins/colorpicker/bootstrap-colorpicker.js',
        bower + 'AdminLTE/plugins/datatables/jquery.dataTables.js',
        bower + 'AdminLTE/plugins/datepicker/bootstrap-datepicker.js',
        bower + 'AdminLTE/plugins/daterangepicker/moment.js',
        bower + 'AdminLTE/plugins/daterangepicker/daterangepicker.js',
        bower + 'AdminLTE/plugins/fastclick/fastclick.js',
        bower + 'AdminLTE/plugins/flot/jquery.flot.js',
        bower + 'AdminLTE/plugins/fullcalendar/fullcalendar.js',
        bower + 'AdminLTE/plugins/iCheck/icheck.js',
        bower + 'AdminLTE/plugins/input-mask/jquery.inputmask.js',
        bower + 'AdminLTE/plugins/ionslider/ion.rangeSlider.min.js',
        bower + 'AdminLTE/plugins/jQueryUI/jquery-ui.js',
        bower + 'AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        bower + 'AdminLTE/plugins/knob/jquery.knob.js',
        bower + 'AdminLTE/plugins/morris/morris.js',
        bower + 'AdminLTE/plugins/pace/pace.js',
        bower + 'AdminLTE/plugins/select2/select2.full.js',
        bower + 'AdminLTE/plugins/slimScroll/jquery.slimscroll.js',
        bower + 'AdminLTE/plugins/sparkline/jquery.sparkline.js',
        bower + 'AdminLTE/plugins/timepicker/bootstrap-timepicker.js',
        bower + 'AdminLTE/dist/js/app.js',
        './app/Back/resources/assets/js/**/*.js'
    ], './public/js/back.js');

    ////////////////////////////////////////////////////////
    //////////////////////// FRONT ////////////////////////
    //////////////////////////////////////////////////////
    mix.sass('./app/Front/resources/assets/style/front.scss');
    mix.scripts([
       './resources/assets/js/front/**/*.js'
    ], './public/js/front.js');

    /////////////////////////////////////////////////////////
    //////////////////////// IMAGES ////////////////////////
    ///////////////////////////////////////////////////////
    //mix.imagemin();

    //////////////////////////////////////////////////////////
    //////////////////////// VERSION ////////////////////////
    ////////////////////////////////////////////////////////
    mix.version([
        'css/*.css',
        'js/*.js',
    ]);

    ///////////////////////////////////////////////////////
    //////////////////////// COPY ////////////////////////
    /////////////////////////////////////////////////////
    mix.copy(bower + 'font-awesome/fonts', './public/build/fonts/');
    mix.copy(bower + 'AdminLTE/dist/img', './public/build/img/');
});