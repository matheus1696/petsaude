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
        'order',
        'evaluetion_personal_id'
    ];

    public function EvaluetionPersonal(){
        return $this->belongsTo(EvaluetionPersonal::class,'evaluetion_personal_id','id');
    }
}
