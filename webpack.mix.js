let mix = require('laravel-mix');
// let tailwindcss = require('tailwindcss');
require('laravel-mix-tailwind');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css')
//    .options({
//        processCssUrls: false,
//        postCss: [tailwindcss('./tailwind.js')],
//    })
//    .browserSync(process.env.DEV_URL);


mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .tailwind()
    .browserSync(process.env.DEV_URL);