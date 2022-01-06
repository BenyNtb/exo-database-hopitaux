<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultationStatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultation_statuts')->insert([
            [
                'statut' => 'Planifiée',
                'created_at' => now(),
            ],
            [
                'statut' => 'Annulée',
                'created_at' => now()
            ],
            [
                'statut' => 'Raté',
                'created_at' => now()
            ],
            [
                'statut' => 'Fait',
                'created_at' => now()
            ]
        ]);
    }
}
