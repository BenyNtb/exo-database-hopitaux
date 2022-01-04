<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locals')->insert([
            [
                'nom' => 'Bureau',
                // 'numero' => '',
                'type_id' => 1,
                'created_at'=> now(),
            ],
            [

                'nom' => 'Bloc',
                // 'numero' => '',
                'type_id' => 2,
                'created_at'=> now(),
            ],
        ]);
        
    }
}
