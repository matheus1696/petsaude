<?php

namespace Database\Seeders;

use App\Models\Institution\InstitutionEducationCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionEducationCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InstitutionEducationCourse::create(['title'=>'Enfermagem','filter'=>strtolower('Enfermagem'),]);
        InstitutionEducationCourse::create(['title'=>'Medicina','filter'=>strtolower('Medicina'),]);
        InstitutionEducationCourse::create(['title'=>'Comunicação Social','filter'=>strtolower('Comunicação Social'),]);
        InstitutionEducationCourse::create(['title'=>'Educação Física','filter'=>strtolower('Educação Física'),]);
        InstitutionEducationCourse::create(['title'=>'Biomedicina','filter'=>strtolower('Biomedicina'),]);
        InstitutionEducationCourse::create(['title'=>'Fisioterapia','filter'=>strtolower('Enfermagem'),]);
        InstitutionEducationCourse::create(['title'=>'Designer','filter'=>strtolower('Designer'),]);
        InstitutionEducationCourse::create(['title'=>'Psicologia','filter'=>strtolower('Psicologia'),]);
        InstitutionEducationCourse::create(['title'=>'Odontologia','filter'=>strtolower('Odontologia'),]);
        InstitutionEducationCourse::create(['title'=>'Pedagogia','filter'=>strtolower('Pedagogia'),]);
        InstitutionEducationCourse::create(['title'=>'História','filter'=>strtolower('História'),]);
        InstitutionEducationCourse::create(['title'=>'Direito','filter'=>strtolower('Direito'),]);
        InstitutionEducationCourse::create(['title'=>'Nutrição','filter'=>strtolower('Nutrição'),]);
        InstitutionEducationCourse::create(['title'=>'História','filter'=>strtolower('História'),]);
        InstitutionEducationCourse::create(['title'=>'Assistente Social','filter'=>strtolower('Assistente Social'),]);
    }
}
