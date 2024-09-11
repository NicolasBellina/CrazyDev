import { defineConfig } from 'vite';
import laravel from 'vite-plugin-laravel';

export default defineConfig({
    plugins: [
        laravel(),
    ],
    server: {
        proxy: {
            '/app': 'http://localhost'
        }
    }
});
