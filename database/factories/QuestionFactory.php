<?php

namespace Database\Factories;

use App\Models\Form;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['text', 'multiple_choice', 'checkbox', 'rating', 'dropdown'];
        
        return [
            'question' => fake()->sentence(rand(5, 10)) . '?',
            'form_id' => Form::factory(),
            'type' => fake()->randomElement($types),
        ];
    }
}
