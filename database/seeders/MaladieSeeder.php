<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaladieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maladies')->insert([
            [
                'nom' => 'Endométriose',
                'created_at' => now(),
            ],
            [
                'nom' => 'Maladie de Charcot',
                'created_at' => now()
            ],
            [
                'nom' => 'Maladie de Lyme',
                'created_at' => now()
            ],
            [
                'nom' => 'Fibromyalgie',
                'created_at' => now()
            ],
            [
                'nom' => 'Maladie de Crohn',
                'created_at' => now()
            ],
            [
                'nom' => 'Mononucléose',
                'created_at' => now()
            ],
            [
                'nom' => 'Psoriasis',
                'created_at' => now()
            ],
            [
                'nom' => 'Scarlatine',
                'created_at' => now()
            ],
            [
                'nom' => 'Hémorroïdes',
                'created_at' => now()
            ],
            [
                'nom' => 'Schizophrénie',
                'created_at' => now()
            ],
            [
                'nom' => 'Diabète',
                'created_at' => now()
            ],
            [
                'nom' => 'Gougerot-Sjögren',
                'created_at' => now()
            ],
            [
                'nom' => 'Asthme',
                'created_at' => now()
            ],
            [
                'nom' => 'Parkinson',
                'created_at' => now()
            ],
            [
                'nom' => 'Troubles Bipolaires',
                'created_at' => now()
            ],
            [
                'nom' => 'Crohn',
                'created_at' => now()
            ],
            [
                'nom' => 'Narcolepsie',
                'created_at' => now()
            ],
            [
                'nom' => 'Fibromyalgie',
                'created_at' => now()
            ],
            [
                'nom' => 'Varicelle',
                'created_at' => now()
            ],
            [
                'nom' => 'Méningite',
                'created_at' => now()
            ],

        ]);
    }
}
