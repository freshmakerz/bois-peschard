const { mix } = require('laravel-mix');

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

mix.scripts([
        'public/js/jquery.js',
        'public/js/foundation.min.js',
        'public/js/slick.min.js',
        'public/js/slick.js',
        'public/js/scripts.js'
    ], 'public/js/app.js')
   .styles([
        'public/css/normalize.css',
        'public/css/foundation.min.css',
        'public/css/slick.css',
        'public/css/styles.css'
    ], 'public/css/app.css')
    .version();
