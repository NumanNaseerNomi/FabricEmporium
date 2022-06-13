const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', []);

mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/plugins/bootstrap/');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/plugins/bootstrap/');

mix.copy('resources/plugins/fontAwesome', 'public/plugins/fontAwesome/');
mix.copy('resources/images/logos', 'public/images/logos/');

mix.postCss('resources/css/style.css', 'public/css');


