import { defineConfig } from '@playwright/test';

export default defineConfig({
  testDir: './tests/playwright',  // Asegúrate de que tus pruebas de Playwright están en esta carpeta
  use: {
    browserName: 'chromium',  // Puedes cambiar a 'firefox' o 'webkit' si prefieres otros navegadores
  },
});