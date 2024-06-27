<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEducationInstitution extends Model
{
    use HasFactory;

    protected $table = 'company_education_institutions';

    protected $fillable =
    [
        'title',
        'status',
    ];
}

