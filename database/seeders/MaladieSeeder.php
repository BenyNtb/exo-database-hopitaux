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
                'traitement' => 'antalgiques, destinés à soulager les symptômes douloureux',
                'curable' => false,
                'created_at' => now(),
            ],
            [
                'nom' => 'Maladie de Charcot',
                'traitement' => 'Le riluzole est le seul médicament actif sur l évolution de la maladie de charcot et doit être administré dans un cadre médical uniquement',
                'curable' => false,
                'created_at' => now()
            ],
            [
                'nom' => 'Maladie de Lyme',
                'traitement' => 'La maladie de Lyme se traite avec des antibiotiques',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => 'Fibromyalgie',
                'traitement' => 'antalgiques, anti-convulsivants, antidépresseurs',
                'curable' => false,
                'created_at' => now()
            ],
            [
                'nom' => 'Maladie de Crohn',
                'traitement' => 'anti-inflammatoires, immunosuppresseurs',
                'curable' => false,
                'created_at' => now()
            ],
            [
                'nom' => 'Mononucléose',
                'traitement' => 'Il n existe aucun traitement spécifique pour guérir la mononucléose. Il s agit d une maladie bénigne qui disparaît généralement d elle même au bout de 4 à 8 semaines',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => 'Psoriasis',
                'traitement' => 'application sur la peau de pommades, crèmes ou lotions à base de dermocorticoïdes ou à base d analogues de la vitamine D3',
                'curable' => false,
                'created_at' => now()
            ],
            [
                'nom' => 'Scarlatine',
                'traitement' => 'Antibiotiques (habituellement de la pénicilline ou de l amoxicilline)',
                'curable' => false,
                'created_at' => now()
            ],
            [
                'nom' => 'Hémorroïdes',
                'traitement' => 'Appliquer du froid : en cas de douleur ou de démangeaisons, appliquer des compresses froides au niveau anal plusieurs fois par jour',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => 'Schizophrénie',
                'traitement' => 'antipsychotiques ',
                'curable' =>  false,
                'created_at' => now()
            ],
            [
                'nom' => 'Diabète',
                'traitement' => 'Une alimentation équilibrée, Des exercices physiques en suffisance, Garder un poids stable ',
                'curable' => false,
                'created_at' => now()
            ],
            [
                'nom' => "Fièvre",
                'traitement' => ' paracétamol ou acétaminophène',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => 'Acné',
                'traitement' => 'utilisation de peroxyde de benzoyle est recommandée. L’application de ce produit une à deux fois par jour lutte contre l’épaississement de la peau',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => 'Appendicite',
                'traitement' => 'intervention chirurgicale',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => 'Migraine',
                'traitement' => 'médicament contre les vomissements',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => 'Toux',
                'traitement' => 'antibiotiques ou les sirops pour la toux',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => 'Hernie discale',
                'traitement' => 'les hernies discales guérissent spontanément ',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => "Constipation",
                'traitement' => 'Boire suffisamment et régulièrement (au moins 1 litre et ½ par jour), médicaments laxatifs ',
                'curable' => true,
                'created_at' => now()
            ],
            [
                'nom' => 'Varicelle',
                'traitement' => 'la varicelle guérit spontanément, Éviter de gratter est le meilleur conseil à appliquer',
                'curable' =>  true,
                'created_at' => now()
            ],
            [
                'nom' => 'Méningite',
                'traitement' => 'antibiotiques, antifongiques ou antiparasitaires',
                'curable' =>  true,
                'created_at' => now()
            ],

        ]);
    }
}
