const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('theme-custom.scss','public/assets-front/css/theme-custom.min.css')
       .webpack('app.js');
    mix.sass('panel-theme-custom.scss', 'public/assets-panel/stylesheets/theme-custom.min.css')
});
