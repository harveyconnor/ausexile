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

elixir(function(mix) {
    mix.sass('app.scss')
        .webpack('app.js')
        .styles([
            "plugins/animate/animate.min.css",
            "theme.min.css",
            "custom.css",
        ], 'public/js/style.css')
        .scripts([
            "core.js",
            "jquery-3.1.0.min.js",
            "bootstrap.min.js"
        ], 'public/js/base.js')
        .version([
            'css/style.css',
            'js/base.js',
            'css/app.css',
            'js/app.js',
        ])
        .copy('node_modules/font-awesome/fonts', 'public/fonts');
    mix.copy('node_modules/clipboard/dist', 'public/js');
});
