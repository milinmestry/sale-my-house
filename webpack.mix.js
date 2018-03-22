let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/top-nav.scss', 'public/css');


// mix.styles([
//   'node_modules/tachyons/css/tachyons.min.css',
// ], 'public/css/all.css');

mix.copy('node_modules/tachyons/css/tachyons.min.css',
  'public/css/tachyons.min.css').version();