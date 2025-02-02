<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clinic;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        // Clinic::insert([
        //     ['clinic_name' => 'The VENTS Clinic'],
        //     ['clinic_name' => 'Tardecilla Clinic'],
        //     ['clinic_name' => 'Assumpta Maternity & Medical Clinic'],
        // ]);
        Clinic::insert([
            'clinic_name' => 'The VENTS Clinic',
            'clinic_logo' => 'vents-logo',
        ]);
        Clinic::insert([
            'clinic_name' => 'Tardecilla Clinic',
            'clinic_logo' => 'tardecilla-logo',
        ]);
        Clinic::insert([
            'clinic_name' => 'Assumpta Maternity & Medical Clinic',
            'clinic_logo' => 'assumpta-logo',
        ]);
    }
}
