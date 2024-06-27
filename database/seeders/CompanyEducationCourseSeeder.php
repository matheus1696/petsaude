<?php

namespace Database\Seeders;

use App\Models\Company\CompanyEducationCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyEducationCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyEducationCourse::create(['title'=>'Enfermagem','filter'=>strtolower('Enfermagem'),]);
        CompanyEducationCourse::create(['title'=>'Medicina','filter'=>strtolower('Medicina'),]);
        CompanyEducationCourse::create(['title'=>'Comunicação Social','filter'=>strtolower('Comunicação Social'),]);
        CompanyEducationCourse::create(['title'=>'Educação Física','filter'=>strtolower('Educação Física'),]);
        CompanyEducationCourse::create(['title'=>'Biomedicina','filter'=>strtolower('Biomedicina'),]);
        CompanyEducationCourse::create(['title'=>'Fisioterapia','filter'=>strtolower('Enfermagem'),]);
        CompanyEducationCourse::create(['title'=>'Designer','filter'=>strtolower('Designer'),]);
        CompanyEducationCourse::create(['title'=>'Psicilogia','filter'=>strtolower('Psicilogia'),]);
        CompanyEducationCourse::create(['title'=>'Odontologia','filter'=>strtolower('Odontologia'),]);
        CompanyEducationCourse::create(['title'=>'Pedagogia','filter'=>strtolower('Pedagogia'),]);
        CompanyEducationCourse::create(['title'=>'História','filter'=>strtolower('História'),]);
        CompanyEducationCourse::create(['title'=>'Direito','filter'=>strtolower('Direito'),]);
    }
}
