<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'form_id',
        'type'
    ];

    /**
     * Get the form that owns the question.
     */
    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }

    /**
     * Get answers related to this question.
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class, 'father_question_id');
    }

    /**
     * Get the statistics for this question.
     */
    public function stats(): HasOne
    {
        return $this->hasOne(QuestionStat::class);
    }

    /**
     * Ensure a stats record exists for this question
     */
    public function ensureStatsExist(): QuestionStat
    {
        return $this->stats()->firstOrCreate([
            'question_id' => $this->id
        ]);
    }

    /**
     * Record an answer to this question
     */
    public function recordAnswer(): void
    {
        $stats = $this->ensureStatsExist();
        $stats->incrementAnswered();
    }

    /**
     * Record that this question was skipped
     */
    public function recordSkip(): void
    {
        $stats = $this->ensureStatsExist();
        $stats->incrementSkipped();
    }
} 