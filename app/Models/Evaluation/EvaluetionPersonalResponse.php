<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluetionPersonalResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'evaluetion_personal_id',
        'user_id',
        'response'
    ];
}
