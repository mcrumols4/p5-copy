<?php

use App\Models\User;

// Test to create a page
test('Create User', function () {
    $user = User::factory()->create([
        'name' => 'Test', 'role' => '2', 'email' => 'test@test.com', 'password' => Hash::make('ImatgePersonal123!'), 'email_verified_at' => now()
    ]);
    $this->assertDatabaseHas('users', [
        'email' => 'test@test.com',
    ]);
});