const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('@tinypixelco/laravel-mix-wp-blocks');
require('laravel-mix-purgecss');
require('laravel-mix-copy-watched');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */
mix
    .setPublicPath('./dist')
    .browserSync('http://moonwine.lan');


mix
    .sass('assets/styles/app.scss', 'styles')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });

mix
    .js('assets/scripts/app.js', 'scripts')

mix
    .copyWatched('assets/images/**', 'dist/images', {base: 'assets/images'});

mix.options({processCssUrls: false});

mix.sourceMaps(false, 'source-map').version();
