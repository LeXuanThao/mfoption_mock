import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel(['resources/js/index.jsx']),
        react()
    ],
    server: {
        host: "crispy-space-guide-6jp6j6vxrvhxwx-5173.app.github.dev",
        cors: true,
        hmr: {
            host: "crispy-space-guide-6jp6j6vxrvhxwx-5173.app.github.dev",
            protocol: "wss",
            clientPort: 443
        },
    }
});
