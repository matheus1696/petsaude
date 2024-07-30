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
        CompanyOccupation::create(['code'=>'00001','title'=>'Tutor Coordenador de Grupo','filter'=>'tutor coordenador de grupo','classification'=>'Tutor']);

        CompanyOccupation::create(['code'=>'00002','title'=>'Tutor','filter'=>'tutor','classification'=>'Tutor']);

        CompanyOccupation::create(['code'=>'00003','title'=>'Preceptor','filter'=>'preceptor','classification'=>'Preceptor',]);

        CompanyOccupation::create(['code'=>'00004','title'=>'Estudante Bolsista','filter'=>'estudante bolsista','classification'=>'Estudante',]);

        CompanyOccupation::create(['code'=>'00005','title'=>'Estudante Voluntário','filter'=>'estudante voluntário','classification'=>'Estudante',]);

        CompanyOccupation::create(['code'=>'00006','title'=>'Orientador de Serviço','filter'=>'orientador de serviço','classification'=>'Orientador',]);

        CompanyOccupation::create(['code'=>'00007','title'=>'Tutor Voluntário','filter'=>'tutor voluntário','classification'=>'Tutor',]);

        CompanyOccupation::create(['code'=>'00008','title'=>'Desistente','filter'=>'desistente','classification'=>'Desistente',]);

        CompanyOccupation::create(['code'=>'00009','title'=>'Coordenadora Geral','filter'=>'coordenadora geral','classification'=>'Coordenador Geral',]);
    }
}
