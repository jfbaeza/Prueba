import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js',
                'resources/scss/home/main.scss', 'resources/js/home/main.js'
            ],
            refresh: true,
        }),
    ],
});
