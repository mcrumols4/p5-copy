import { defineConfig } from 'vitest/config';

export default defineConfig({
  test: {
    globals: true,  // Si usas Jest-style assertions o tests
    environment: 'node',  // Usa el entorno de Node.js si estás testeando lógica pura
    hookTimeout: 30000, // aplica a beforeEach, afterEach, etc.
    testTimeout: 30000  // opcional: para los tests en sí
  },
});