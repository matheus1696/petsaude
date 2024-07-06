<?php

namespace Database\Seeders;

use App\Models\Notice\NoticeBoard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        NoticeBoard::create([
            'title'=>'Aviso 01',
            'description'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, repudiandae? Incidunt commodi et iste esse voluptate, temporibus minus exercitationem, eveniet totam tempora consectetur provident expedita aliquid minima? Autem, odit dicta?',
            'to'=>'user',
            'notice_level_id'=>1,
        ]);
    }
}
