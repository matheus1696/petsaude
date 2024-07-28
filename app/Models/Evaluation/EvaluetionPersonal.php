<?php

namespace App\Models\Evaluation;

use App\Models\Company\CompanyOrganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluetionPersonal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'to_specific_group_id',
        'released'
    ];

    public function CompanyOrganization(){
        return $this->belongsTo(CompanyOrganization::class,'to_specific_group_id','id');
    }
}
