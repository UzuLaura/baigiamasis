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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'resources/css/style.css',
        'resources/css/auth.css',
        'resources/css/feedback.css',
        'resources/css/hero.css',
        'resources/css/navbar.css',
        'resources/css/services.css',
        'resources/css/table.css',
        'resources/css/responsive.css',
    ], 'public/css/style.css')
    .copy('resources/images/24744.jpg', 'public/images');