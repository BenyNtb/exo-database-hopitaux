<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HopitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hopitals')->insert([
            [
                'nom' => 'Erasme',
                'adresse' => 'Rte de Lennik 808, 1070 Bruxelles',
                'created_at' => now(),
            ],
            [
                'nom' => 'Saint-Luc',
                'adresse' => 'Av. Hippocrate 10, 1200 Bruxelles',
                'created_at' => now()
            ],
            [
                'nom' => 'Paul Brien',
                'adresse' => ' Rue du Foyer Schaerbeekois 36, 1030 Bruxelles',
                'created_at' => now()
            ],
        ]);
    }
}
