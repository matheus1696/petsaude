<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationPersonalReleased extends Model
{
    use HasFactory;

    protected $fillable = [
        'evaluation_id',
        'user_id',
    ];

    public function EvaluetionPersonal(){
        return $this->belongsTo(EvaluetionPersonal::class,'evaluetion_id','id');
    }
}
