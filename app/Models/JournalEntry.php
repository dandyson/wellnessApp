<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'before_entry',
        'after_entry',
        'fortune_telling',
        'over_estimating_danger',   
        'catastrophizing',
        'mind_reading',
        'black_and_white_thinking', 
        'over_generalizing',    
        'negative_brain_filter',
        'should_statements',
        'emotional_reasoning',
        'unsure',
    ];
}
