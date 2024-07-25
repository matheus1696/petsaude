<?php

namespace App\Models\Evaluation;

use App\Models\Company\CompanyOccupation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluetion extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'data_start',
        'data_end',
        'description',
        'occupation_id',
    ];

    public function CompanyOccupation(){
        return $this->belongsTo(CompanyOccupation::class,'occupation_id','id');
    }
}
