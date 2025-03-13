const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
   // .js('source/_assets/js/main.js', 'js')
   .css('source/_babygo/_assets/css/main.css', 'babygo/css', [
     require('postcss-import'),
     require('tailwindcss')
   ])
   .css('source/_babygo-v2/assets/css/main.css', 'babygo-v2/css', [
     require('postcss-import'),
     require('tailwindcss')
   ])
   .options({
     processCssUrls: false
   })
   .version();
