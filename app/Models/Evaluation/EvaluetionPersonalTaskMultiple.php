<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluetionPersonalTaskMultiple extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'task_id'
    ];
}
