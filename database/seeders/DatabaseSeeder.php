<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  public function run(): void{// Create the admin and user accounts
    User::create(['name' => 'Admin', 'role' => '0', 'email' => 'admin@admin.com', 'password' => Hash::make('ImatgePersonal123!'), 'email_verified_at' => now(),]);
    User::create(['name' => 'User', 'role' => '1', 'email' => 'user@user.com', 'password' => Hash::make('ImatgePersonal123!'), 'email_verified_at' => now(),]);

        $this->call([
            PagesSeeder::class,
            ImageSeeder::class,
            QuestionnaireSeeder::class,
        ]);
    }
}