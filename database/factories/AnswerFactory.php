<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    protected $model = Answer::class;

    public function definition()
    {
        return [
            'answer' => $this->faker->sentence,
            'father_question_id' => Question::factory(),
            'child_question_id' => null,
            'recommendation' => $this->faker->sentence,
        ];
    }
}
