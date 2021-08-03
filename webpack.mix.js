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

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/soft-ui-dashboard.js', 'public/js/admin/soft-ui-dashboard.min.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin/soft-ui-dashboard.scss', 'public/css/admin/')

    .sourceMaps()

    .copy('resources/js/admin/core/*', 'public/js/admin/core')
    .copy('resources/js/admin/plugins/*', 'public/js/admin/plugins')
    .copyDirectory('resources/css', 'public/css')
    .copyDirectory('resources/fonts', 'public/fonts')
    .copyDirectory('resources/img', 'public/img');
    // .copyDirectory('resources/img', 'public/img');

// if (mix.inProduction()) {
//     mix.version();
// }
