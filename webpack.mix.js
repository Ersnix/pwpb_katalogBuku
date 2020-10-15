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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix.combine(['node_modules/jquery/dist/jquery.js','node_modules/bootstrap/dist/js/bootstrap.min.js'],'public/js/juery.js');



// mix.js('resources/assets/js/app.js', 'public/js')
//    .js('node_modules/jquery/dist/jquery.min.js', 'public/js')
//    .autoload({
//         jquery: ['$', 'window.jQuery', 'jQuery'],
//     });
