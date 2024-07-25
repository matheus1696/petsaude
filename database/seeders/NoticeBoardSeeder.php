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

        $dbUser = User::all();

        foreach ($dbUser as $value) {
            NoticeBoard::create([
                'title'=>'Aviso 01',
                'description'=>'Bem-vindo ao sistema, somos gratos pela sua vida.',
                'to_specific_user_id'=>$value->id,
                'notice_level_id'=>1,
            ]);
        }
    }
}
