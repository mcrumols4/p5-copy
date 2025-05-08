<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title'
    ];

    /**
     * Get the questions for this form.
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    /**
     * Get the statistics for this form.
     */
    public function stats(): HasMany
    {
        return $this->hasMany(Stat::class, 'Form_ID');
    }

    /**
     * Record an answer for this form
     */
    public function recordAnswer(int $answerId, string $answerTitle): void
    {
        QuestionStat::recordAnswer($this->id, $answerId, $answerTitle);
    }
} 