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
mix.styles(['resources/css/custom-bs.css',
            'resources/css/style.css',
            'resources/css/query.fancybox.min.css',
            ],'public/css/front-css.css');

mix.scripts(['resources/js/app.js',
             'resources/js/bootstrap.bundle.min.js',
             'resources/js/bootstrap.js',
             'resources/js/custom.js',
             'resources/js/isotope.pkgd.min.js',
             'resources/js/jquery.animateNumber.min.js',
             'resources/js/jquery.easing.1.3.js',
             'resources/js/jquery.fancybox.min.js',
             'resources/js/jquery.min.js',
             'resources/js/jquery.waypoints.min.js',
             'resources/js/stickyfill.min.js',
             ],'public/js/front-js.js');


