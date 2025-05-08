import { test, expect } from 'vitest';
import { chromium } from 'playwright';

test('Carregar la pàgina Assesorament Capil·lar', async () => {
  const browser = await chromium.launch();
  const page = await browser.newPage();

  await page.goto('http://localhost/Advice/Capillary'); // Cambia la URL si es necesario

  const content = await page.textContent('body');
  expect(content).toContain('ASSESSORAMENT CAPIL·LAR'); // Ajusta según el contenido esperado

  await browser.close();
});