<?php

namespace Database\Seeders;

use App\Models\Notice\NoticeLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        NoticeLevel::create([
            'title'=>'Normal',
            'color'=>'bg-purple-300',
            'color_hover'=>'bg-purple-400'
        ]);
        NoticeLevel::create([
            'title'=>'Urgente',
            'color'=>'bg-red-300',
            'color_hover'=>'bg-red-400'
        ]);
    }
}
