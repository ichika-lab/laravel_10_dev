import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/scss/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        vue(),
    ],
    server: {
        host: true,
        // ost:'xxx.xxx.xxx.xxx', // ipを記載する
        // port: 5731,
        hmr: {
            host: 'localhost',
        },
        watch: {
            usePolling: true,
        },
    },
});
