import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // adding this to allow visiting from other devices
    server: {
        host: '0.0.0.0',
        port: 8001,
        hmr: {
            host: '192.168.1.89',
        },
    },
});
