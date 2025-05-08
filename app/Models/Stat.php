<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stat extends Model
{
    protected $fillable = [
        'Stat_ID',
        'Final_Page',
        'Form_ID'
    ];

    /**
     * Get the form that owns the stats.
     */
    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class, 'Form_ID');
    }
} 