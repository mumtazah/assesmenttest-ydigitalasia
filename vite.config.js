import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/js/landing.js',
        'resources/js/app.js',
        'resources/css/app.css',
        'resources/css/global.css'
      ],
      refresh: true,
    }),
    vue()],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'),
    },
  },
})
