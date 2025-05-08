<?php

use App\Models\Form;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('Create a form', function () {
    // Create a form
    $form = Form::factory()->create([
        'title' => 'Test Questionnaire'
    ]);
    
    // Assert it was added to the database
    $this->assertDatabaseHas('forms', [
        'id' => $form->id,
        'title' => 'Test Questionnaire'
    ]);
    
    // Assert the form attributes are correct
    expect($form->title)->toBe('Test Questionnaire');
});

test('Delete a form', function () {
    // Create a form to delete
    $form = Form::factory()->create([
        'title' => 'Form to Delete'
    ]);
    
    // Verify it exists first
    $this->assertDatabaseHas('forms', [
        'id' => $form->id
    ]);
    
    // Delete the form
    $form->delete();
    
    // Assert it was removed from the database
    $this->assertDatabaseMissing('forms', [
        'id' => $form->id
    ]);
});
