import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
const path = require('path')
import inject from '@rollup/plugin-inject';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~aos': path.resolve(__dirname, 'node_modules/aos'),
        }
    }
});
