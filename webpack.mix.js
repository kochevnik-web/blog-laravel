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

mix.styles([
    'resources/src/css/bootstrap.css',
    'resources/src/css/style.css',
], 'public/assets/css/bundle.css');

mix.scripts([
    'resources/src/js/jquery.js',
    'resources/src/js/bootstrap.js',
], 'public/assets/js/bundle.js');

// mix.copyDirectory('resources/src/img', 'public/assets/img');

// mix.browserSync('laravel.loc');
