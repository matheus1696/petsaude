<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluetionPersonalTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'evaluetion_personal_id'
    ];
}
