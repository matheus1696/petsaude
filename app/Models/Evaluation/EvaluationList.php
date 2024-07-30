<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'organization_id',
    ];
}
