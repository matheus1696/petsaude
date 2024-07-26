<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluetionPersonal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];
}
