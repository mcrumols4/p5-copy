import { test, expect } from 'vitest';
import { chromium } from 'playwright';

test('Create questionnaire', async () => {
    const browser = await chromium.launch({ headless: true });
    const page = await browser.newPage();

    await page.goto('http://localhost/login');

    await page.fill('input[name="email"]', 'admin@admin.com');
    await page.fill('input[name="password"]', 'ImatgePersonal123!');
    await page.click('button[type="submit"]');

    await page.waitForURL('http://localhost/dashboard');

    await page.click('a[name="Qüestionaris"]');

    await page.click('button[name="CreateQuestionnaire"]');

    await page.fill('input[name="title"]', 'SkinTest');
    await page.click('button[type="submit"]');

    await page.click('a[name="Qüestionaris"]');
    
    const tableText = await page.textContent('#QuestionnaireTable');
    expect(tableText).toContain('SkinTest');
    
    await browser.close();

}, 30000);

test('Edit Questionnaire', async () => {
  const browser = await chromium.launch({ headless: true });
  const page = await browser.newPage();
  
  await page.goto('http://localhost/login');

  await page.fill('input[name="email"]', 'admin@admin.com');
  await page.fill('input[name="password"]', 'ImatgePersonal123!');
  await page.click('button[type="submit"]');

  await page.waitForURL('http://localhost/dashboard');
  await page.click('a[name="Qüestionaris"]');

  await page.locator('button[name="modify_questionnaire"]').nth(2).click();
  

  await page.fill('input[name="edit_questionnaire"]', 'SkinTest3');
  await page.click('button[type="submit"]');

  
  const tableText = await page.textContent('#QuestionnaireTable');
  expect(tableText).toContain('SkinTest3');
  
  await browser.close();
}, 30000);
