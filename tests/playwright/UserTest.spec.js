import { test, expect } from 'vitest';
import { chromium } from 'playwright';

test('Login and create user', async () => {
  const browser = await chromium.launch({ headless: true }); // Puedes poner true
  const page = await browser.newPage();

  // LOGIN
  await page.goto('http://localhost/login');
  await page.fill('input[name="email"]', 'admin@admin.com');
  await page.fill('input[name="password"]', 'ImatgePersonal123!');
  await page.click('button[type="submit"]');

  // Esperar redirección al dashboard
  await page.waitForURL('http://localhost/dashboard');

  // CREAR USUARIO
  await page.click('button[name="NewUser"]');
  await page.fill('input[name="name"]', 'Example1');
  await page.fill('input[name="email"]', 'example@example.com');
  await page.fill('input[name="password"]', 'ImatgePersonal123!');
  await page.click('button[type="submit"]');

  await page.goto('http://localhost/dashboard');

  const tableText = await page.textContent('#User_Table');
  expect(tableText).toContain('Example1');

  await browser.close();
}, 10000);

test('Login and update user', async () => {
  const browser = await chromium.launch({ headless: true });
  const page = await browser.newPage();

  // Ir a la página de login
  await page.goto('http://localhost/login');

  // Completar formulario de login
  await page.fill('input[name="email"]', 'admin@admin.com');
  await page.fill('input[name="password"]', 'ImatgePersonal123!');
  await page.click('button[type="submit"]');

  // Esperar redirección al dashboard
  await page.waitForURL('http://localhost/dashboard');
  await page.click('button[name="Edit_Example1"]');

  // await page.goto('http://localhost/editUser/11');

  await page.fill('input[name="name"]', 'Example11');
  await page.fill('input[name="email"]', 'example11@example.com');
  await page.click('button[type="submit"]');

  await page.waitForURL('http://localhost/dashboard');

  const tableText = await page.textContent('#User_Table');
  expect(tableText).toContain('Example11');

  await browser.close();
}, 10000);

test('Login and delete user', async () => {
  // Ir a la página de login
  const browser = await chromium.launch({ headless: true });
  const page = await browser.newPage();

  await page.goto('http://localhost/login');

  // Completar formulario de login
  await page.fill('input[name="email"]', 'admin@admin.com');
  await page.fill('input[name="password"]', 'ImatgePersonal123!');
  await page.click('button[type="submit"]');

  // Esperar redirección al dashboard
  await page.waitForURL('http://localhost/dashboard');
  page.on('dialog', async (dialog) => {
      console.log('Se abrió un diálogo:', dialog.message());
      await dialog.accept(); // o dialog.dismiss();
    });
  await page.click('button[name="Delete_Example11"]');
  

  const tableText = await page.textContent('#User_Table');
  expect(tableText).not.toContain('Example11');

  await browser.close();
}, 10000);