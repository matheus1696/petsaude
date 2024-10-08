<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserPermissionsSeeder::class,
            UserSexualOrientationSeeder::class,
            UserSeeder::class,
            RegionCountrySeeder::class,
            RegionStateSeeder::class,
            RegionCitySeeder::class,
            CompanyOrganizationSeeder::class,
            CompanyOccupationSeeder::class,
            CompanyTypeEstablishmentsSeeder::class,
            CompanyFinancialBlockSeeder::class,
            CompanyEstablishmentSeeder::class,
            CompanyEstablishmentDepartmentSeeder::class,
            InstitutionEducationSeeder::class,
            InstitutionEducationCourseSeeder::class,
            UserParticipantesSeeder::class,
            NoticeLevelSeeder::class,
            NoticeBoardSeeder::class,
            NoticeBoardHistorySeeder::class,
        ]);
    }
}
