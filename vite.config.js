import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/index.css',
                'resources/css/app-layout.css',
                'resources/css/destyle.css',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
