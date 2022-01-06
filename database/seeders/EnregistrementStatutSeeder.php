<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnregistrementStatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enregistrement_statuts')->insert([
            [
                'statut' => 'Diagnostiqué',
                'created_at' => now(),
            ],
            [
                'statut' => 'En cours de traitement',
                'created_at' => now()
            ],
            [
                'statut' => 'Guéri',
                'created_at' => now()
            ],
            [
                'staut' => 'Incurable',
                'created_at' => now()
            ],
        ]);
    }
}
