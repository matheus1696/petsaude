<?php

namespace App\Models;

use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyOccupation;
use App\Models\Company\CompanyOrganization;
use App\Models\User\UserSexualOrientation;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable =
    [
        'name',
        'filter',
        'email',
        'password',
        'email_verified_at',
        'organization_id',
        'occupation_id',
        'establishment_id',
        'bank_account_type',
        'bank_name',
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function SexualOrientation(){
        return $this->belongsTo(UserSexualOrientation::class,'sexual_orientation_id','id');
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

