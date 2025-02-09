import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import { dirname } from 'path'
import { fileURLToPath } from 'url'

const _dirname = typeof __dirname !== 'undefined'
    ? __dirname
    : dirname(fileURLToPath(import.meta.url))


export default defineConfig({
    server: {
        host: '0.0.0.0'
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
