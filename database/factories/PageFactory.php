<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'subtitle' => $this->faker->sentence,
            'description' => $this->faker->paragraphs(3, true),
            'content' => $this->faker->text
        ];
    }
}
