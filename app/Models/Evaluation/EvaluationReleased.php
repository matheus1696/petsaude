<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationReleased extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_start',
        'date_end',
        'response',
        'evaluetion_id',
        'user_id'
    ];
}
