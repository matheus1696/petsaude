<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEducationCourse extends Model
{
    use HasFactory;

    protected $table = 'company_education_courses';

    protected $fillable =
    [
        'title',
        'status',
    ];
}

