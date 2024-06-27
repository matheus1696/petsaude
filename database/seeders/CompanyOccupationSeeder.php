<?php

namespace Database\Seeders;

use App\Models\Company\CompanyOccupation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyOccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyOccupation::create(['code'=>'00001','title'=>'Tutor Coordenador de Grupo','filter'=>'tutor coordenador de grupo',]);

        CompanyOccupation::create(['code'=>'00002','title'=>'Tutor','filter'=>'tutor',]);

        CompanyOccupation::create(['code'=>'00003','title'=>'Preceptor','filter'=>'preceptor',]);

        CompanyOccupation::create(['code'=>'00004','title'=>'Estudante Bolsista','filter'=>'estudante bolsista',]);

        CompanyOccupation::create(['code'=>'00005','title'=>'Estudante Voluntário','filter'=>'estudante voluntário',]);
    }
}
