<?php

namespace Database\Seeders;

use App\Models\Company\CompanyEducationInstitution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyEducationInstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyEducationInstitution::create(['title'=>'Associação Caruaruense de Ensino Superior e Técnico','acronym'=>'ASCES-UNITA','filter'=>'associação caruaruense de ensino superior e técnico',]);
        CompanyEducationInstitution::create(['title'=>'Universidade Federal de Pernambuco - Campus Agreste','acronym'=>'UFPE-NCV','filter'=>'universidade federal de pernambuco - campus agreste',]);
    }
}
