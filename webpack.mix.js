const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js','resources/js/animsition.js',
'resources/js/bootstrap.js','resources/js/bootstrap.min.js',
'resources/js/countdowntime.js','resources/js/daterangepicker.js',
'resources/js/jquery-3.2.1.min.js','resources/js/main.js', 
'resources/js/moment.min.js','resources/js/popper.min.js',
'resources/js/assets/libs/jquery/dist/jquery.min.js','resources/js/assets/libs/popper.js/dist/umd/popper.min.js',
'resources/js/assets/libs/bootstrap/dist/js/bootstrap.min.js','resources/js/dist/js/app-style-switcher.js',
'resources/js/dist/js/feather.min.js','resources/js/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js',
'resources/js/dist/js/sidebarmenu.js','resources/js/dist/js/custom.min.js',
'resources/js/assets/extra-libs/c3/d3.min.js','resources/js/assets/extra-libs/c3/c3.min.js',
'resources/js/assets/libs/chartist/dist/chartist.min.js','assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js',
'resources/js/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js','resources/js/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js',
'resources/js/dist/js/pages/dashboards/dashboard1.min.js',
'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles(['resources/css/animate.css','resources/css/animsition.min.css',
    'resources/css/bootstrap.min.css','resources/css/daterangepicker.css',
    'resources/css/font-awesome.min.css','resources/css/hamburgers.min.css',
    'resources/css/icon-font.min.css','resources/css/main.css',
    'resources/css/select2.min.css','resources/css/util.css',
    'resources/css/c3.min.css', 'resources/css/chartist.min.css',
    'resources/css/jquery-jvectormap-2.0.2.css', 'resources/css/ame.min.css'
    ], 'public/css/all.css');
     
   
