<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'question_6',
        'question_7',
        'question_8',
        'question_9',
        'value_1',
        'value_2',
        'value_3',
        'value_4',
        'value_5',
        'value_6',
        'value_7',
        'value_8',
        'value_9',
        'type',
        'user_id_evaluated',
        'user_id_response',
    ];
}
