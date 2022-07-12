import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    resolve: {
        alias: [
            {
                // this is required for the SCSS modules
                find: /^~(.*)$/,
                replacement: '$1',
            },
        ],
    },
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/sass/fontawesome.scss',
            'resources/js/app.js',
        ]),
    ],
});
