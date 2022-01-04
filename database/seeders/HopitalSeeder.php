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
                'created_at' => now(),
            ],
            [
                'nom' => 'Saint-Luc',
                'created_at' => now()
            ],
            [
                'nom' => 'Paul Brien',
                'created_at' => now()
            ],
        ]);
    }
}
