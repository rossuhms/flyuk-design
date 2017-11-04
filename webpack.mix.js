let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

mix.sass('resources/assets/sass/app.scss', 'public/css')
.js('resources/assets/js/app.js', 'public/js')
.version()
.options({
    postCss: [
    tailwindcss('./tailwind.js'),
    ]
})
