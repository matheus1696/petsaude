<?php

namespace Database\Seeders;

use App\Models\Notice\NoticeBoard;
use App\Models\User;
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
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora maxime explicabo, perferendis et vitae molestias eveniet, corrupti commodi asperiores, inventore esse itaque blanditiis ullam consequuntur labore? Enim temporibus architecto quasi.',
            'notice_level_id'=>1,
        ]);

        NoticeBoard::create([
            'title'=>'Aviso 02',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora maxime explicabo, perferendis et vitae molestias eveniet, corrupti commodi asperiores, inventore esse itaque blanditiis ullam consequuntur labore? Enim temporibus architecto quasi.',
            'notice_level_id'=>1,
        ]);
    }
}
