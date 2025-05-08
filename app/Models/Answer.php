<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'father_question_id',
        'child_question_id',
        'answer',
        'recommendation',
    ];

    
    // Get the parent question to which this answer belongs
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'father_question_id');
    }

  
    // Get the child question (next question) that this answer leads to
    public function nextQuestion(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'child_question_id');
    }

    /**
     * Get the statistics for this answer.
     */
    public function stats(): HasMany
    {
        return $this->hasMany(QuestionStat::class);
    }

    /**
     * Record this answer for a specific form
     */
    public function recordForForm(Form $form): void
    {
        $form->recordAnswer($this->id, $this->answer);
    }
} 