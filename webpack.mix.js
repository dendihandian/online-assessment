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

mix
    .js('resources/js/app/app.js', 'public/js')
    .js('resources/js/admin/admin.js', 'public/js')
    .sass('resources/scss/app/app.scss', 'public/css')
    .sass('resources/scss/admin/admin.scss', 'public/css')
    .copy('node_modules/startbootstrap-sb-admin-2/img', 'public/images/sbadmin')
    .copy('node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js', 'public/js/sbadmin')
    .copy('node_modules/startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js', 'public/js/sbadmin')
    .copy('node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js', 'public/js/sbadmin')
    .copy('node_modules/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js.map', 'public/js/sbadmin')
    .copy('node_modules/startbootstrap-sb-admin-2/js/sb-admin-2.min.js', 'public/js/sbadmin')
    .sourceMaps()
    .browserSync('online-assessment.test')
    .version();

