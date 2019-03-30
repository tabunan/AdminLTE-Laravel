const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css');
//mix.styles(['resources/dis/css/app.css', 'resources/dis/css/navs.css'], 'public/css/app.css');

mix.js('resources/js/app.js', 'public/js');



