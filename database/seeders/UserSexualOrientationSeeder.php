<?php

namespace Database\Seeders;

use App\Models\User\UserSexualOrientation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSexualOrientationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserSexualOrientation::create([
            'sexual_orientation'=>'Masculino',
            'status'=>true,
        ]);

        UserSexualOrientation::create([
            'sexual_orientation'=>'Feminino',
            'status'=>true,
        ]);

        UserSexualOrientation::create([
            'sexual_orientation'=>'Não Definido',
            'status'=>true,
        ]);
    }
}
