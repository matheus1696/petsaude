<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationQuestionOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'order',
        'value',
        'question_id',
    ];
}
