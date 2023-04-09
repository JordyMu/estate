const mix = require('laravel-mix');
/*
|-----------------------------
|Mix Asset Management
|-----------------------------
|
|Mix providesa clean, fluent API fordefining some Webpack build steps
mix.js('resources/js/app.js',)
*/
mix.js('resources/js/app.js', 'public/js')
.sass('resources/css/styles.scss', 'public/css');