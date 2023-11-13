﻿// vite.config.ts
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react'; 

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss','resources/ts/index.tsx'],
            refresh: true,
        }),
        react(), 
    ],
    server: {
        hmr: {
            host: 'localhost', 
        },
    },
    build: {
        sourcemap: true, // ソースマップを有効にする
    },
    optimizeDeps: {
        include: ['react', 'react-dom', 'antd', 'react-router-dom'], // 明示的にプリビルドする依存関係
        exclude: ['@popperjs/core', 'bootstrap'], // プリビルドから除外する依存関係
    },
});