<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluetionTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'type',
        'order',
        'evaluetion_id'
    ];
}
