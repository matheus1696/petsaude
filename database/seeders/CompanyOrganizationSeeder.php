<?php

namespace Database\Seeders;

use App\Models\Company\CompanyOrganization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyOrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CompanyOrganization::create([
            'title'=>'Saúde mental dos trabalhadores do SUS',
            'acronym'=>'GTA-I',
            'filter'=> strtolower('Saúde mental dos trabalhadores do SUS'),
            'hierarchy'=>'0'
        ]);

        CompanyOrganization::create([
            'title'=>'Violência contra trabalhadores e trabalhadoras do SUS',
            'acronym'=>'GTA-II',
            'filter'=> strtolower('Violência contra trabalhadores e trabalhadoras do SUS'),
            'hierarchy'=>'0'
        ]);

        CompanyOrganization::create([
            'title'=>'Envelhecimento Saudável trabalhadores e trabalhadoras do SUS',
            'acronym'=>'GTA-III',
            'filter'=> strtolower('Envelhecimento Saudável trabalhadores e trabalhadoras do SUS'),
            'hierarchy'=>'0'
        ]);

        CompanyOrganization::create([
            'title'=>'Comunicação Não Violenta e promoção de linguagem que proporciona equidade para trabalhadores e trabalhadoras do SUS',
            'acronym'=>'GTA-IV',
            'filter'=> strtolower('Comunicação Não Violenta e promoção de linguagem que proporciona equidade para trabalhadores e trabalhadoras do SUS'),
            'hierarchy'=>'0'
        ]);

        CompanyOrganization::create([
            'title'=>'Câncer de Mama e Colo Uterino (com ênfase na saúde nas trabalhadoras do SUS)',
            'acronym'=>'GTA-V',
            'filter'=> strtolower('Câncer de Mama e Colo Uterino (com ênfase na saúde nas trabalhadoras do SUS)'),
            'hierarchy'=>'0'
        ]);

    }
}
