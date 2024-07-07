<?php

namespace App\Models\Institution;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionEducationCourse extends Model
{
    use HasFactory;

    protected $table = 'institution_education_courses';

    protected $fillable =
    [
        'title',
        'status',
    ];
}

