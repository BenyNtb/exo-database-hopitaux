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
        $this->call([
            PatientSeeder::class,
            DocteurSeeder::class,
            HopitalSeeder::class,
            MaladieSeeder::class,
            TypeSeeder::class,
            EnregistrementSeeder::class,
            LocalSeeder::class,
            DossiermedicalSeeder::class,
        ]);    
        \App\Models\User::factory(50)->create();
        \App\Models\Consultation::factory(2000)->create();
    }
}
