import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    // adding this to allow visiting from other devices
    server: {
        host: "0.0.0.0",
        https: true,
        port: 8002,
        hmr: {
            // host: '192.168.1.93', // a previous setting
            host: "bible-timeline-production.up.railway.app",
        },
    },
});
