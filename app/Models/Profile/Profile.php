<?php

namespace App\Models\Profile;

use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyOccupation;
use App\Models\Company\CompanyOrganization;
use App\Models\User\UserSexualOrientation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable =
    [
        'name',
        'password',
        'address',
        'name_mother',
        'cpf',
        'registration',
        'contact_1',
        'contact_2',
        'birthday',
        'sexual_orientation_id',
        'organization_id',
        'education_institution_id',
        'education_course_id',
        'occupation_id',
        'establishment_id',
        'bank_account_type',
        'bank',
        'bank_agency',
        'bank_account',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function SexualOrientation(){
        return $this->belongsTo(UserSexualOrientation::class,'sex_id','id');
    }

    public function CompanyOccupation(){
        return $this->belongsTo(CompanyOccupation::class,'occupation_id','id');
    }

    public function CompanyEstablishment(){
        return $this->belongsTo(CompanyEstablishment::class,'establishment_id','id');
    }

    public function CompanyOrganization(){
        return $this->belongsTo(CompanyOrganization::class,'organization_id','id');
    }
}
