<?php

namespace Database\Factories;

use App\Models\consultation;
use App\Models\consultation_statut;
use App\Models\docteur;
use App\Models\patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class consultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // "date" => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            "date" => $this->faker-> dateTimeBetween($startDate = '2021/06/01', $endDate = '2022/01/31'),
            "time" => $this->faker->time($format = 'H:i', rand(8,68400 )),
            "patient_id" => patient::inRandomOrder()->first()->numeroderegistrenational,
            "docteur_id" => docteur::inRandomOrder()->first()->id,
            "consultation_statuts_id" => consultation_statut::inRandomOrder()->first()->id,
        ];
    }
}
