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
    
    // Create new questionnaire
    await page.click('button[name="CreateQuestionnaire"]');

    await page.fill('input[name="title"]', 'TestCreateQuestionnaire');
    await page.click('button[type="submit"]');

    // Verify the questionnaire was created
    await page.click('a[name="Qüestionaris"]');

    const tableText = await page.textContent('#QuestionnaireTable');
    expect(tableText).toContain('TestCreateQuestionnaire');
    
    await browser.close();
}, 30000);

test('Delete questionnaire', async () => {
    const browser = await chromium.launch({ headless: true });
    const page = await browser.newPage();
    
    await page.goto('http://localhost/login');
    
    await page.fill('input[name="email"]', 'admin@admin.com');
    await page.fill('input[name="password"]', 'ImatgePersonal123!');
    await page.click('button[type="submit"]');
    
    await page.waitForURL('http://localhost/dashboard');
    await page.click('a[name="Qüestionaris"]');
    
    // Verify the questionnaire from first test exists
    let tableText = await page.textContent('#QuestionnaireTable');
    expect(tableText).toContain('TestCreateQuestionnaire');
    
    // Find and delete the questionnaire created
    await page.locator(`tr:has-text("TestCreateQuestionnaire") button[name="delete_questionnaire"]`).click();
             
    // Verify the questionnaire was deleted
    await page.reload();
    tableText = await page.textContent('#QuestionnaireTable');
    expect(tableText).not.toContain('TestCreateQuestionnaire');
    
    await browser.close();
}, 30000);