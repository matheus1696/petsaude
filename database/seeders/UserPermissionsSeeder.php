<?php

namespace Database\Seeders;

use App\Models\User\UserPermissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPermissions::create(['name'=>'sysadmin','guard_name'=>'web']);
        UserPermissions::create(['name'=>'admin','guard_name'=>'web']);
        UserPermissions::create(['name'=>'admin_user','guard_name'=>'web']);
        UserPermissions::create(['name'=>'admin_project','guard_name'=>'web']);
        UserPermissions::create(['name'=>'admin_establishment','guard_name'=>'web']);
        UserPermissions::create(['name'=>'admin_institution','guard_name'=>'web']);
        UserPermissions::create(['name'=>'admin_notice','guard_name'=>'web']);
        UserPermissions::create(['name'=>'user','guard_name'=>'web']);
    }
}
