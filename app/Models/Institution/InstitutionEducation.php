<?php

namespace App\Models\Institution;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionEducation extends Model
{
    use HasFactory;

    protected $table = 'institution_educations';

    protected $fillable =
    [
        'title',
        'status',
    ];
}

