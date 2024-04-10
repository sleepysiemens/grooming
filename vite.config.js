import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',

                'resources/lib/lightbox/css/lightbox.min.css',
                'resources/lib/owlcarousel/assets/owl.carousel.min.css',

                'resources/css/bootstrap.min.css',
                'resources/css/style.css',


                'resources/lib/easing/easing.min.js',
                'resources/lib/waypoints/waypoints.min.js',
                'resources/lib/owlcarousel/owl.carousel.min.js',
                'resources/js/main.js',
                'resources/css/adminlte.css',
                'resources/js/adminlte.js'
            ],
            refresh: true,
        }),
    ],
});
