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
   .copy('node_modules/fullcalendar/dist/fullcalendar.min.js', 'public/js')
   .copy('node_modules/fullcalendar/dist/fullcalendar.css', 'public/css')
   .copy('node_modules/fullcalendar/dist/fullcalendar.print.css', 'public/css')
   .copy('node_modules/font-awesome/fonts', 'public/fonts')
   .copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css')
   .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts')
   .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'public/js')
   .sass('resources/assets/sass/bootstrap.scss', 'public/css')
   .sass('resources/assets/sass/style.scss', 'public/css')
   .options({
      processCssUrls: false
   });
