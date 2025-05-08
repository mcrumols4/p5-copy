<?php

use App\Models\User;
use App\Models\Form;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('update questionnaire', function () {
    // user
    $user = User::factory()->create();
    $this->actingAs($user);

    // create form
    $form = Form::factory()->create([
        'title' => 'Questionnaire'
    ]);
        
        
    $this->assertDatabaseHas('forms', [
        'id' => $form->id,
        'title' => 'Questionnaire'
    ]);
        
    expect($form->title)->toBe('Questionnaire');

    // nueva info
    $newTitle = [
        'title' => 'Questionnaire2'
    ];

    $response = $this->post(route('forms.update', $form->id), $newTitle);

    $response->assertRedirect(route('modify.questionnaire.index'));

    expect(Form::find($form->id)->title)->toBe('Questionnaire2');
});