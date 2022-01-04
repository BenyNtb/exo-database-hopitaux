<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Consultation::factory(2000)->create();
        $this->call([
            HopitalSeeder::class,
            MaladieSeeder::class,
            DocteurSeeder::class,
            LocalSeeder::class,
            PatientSeeder::class,
        ]);    
        \App\Models\User::factory(50)->create();
    }
}
