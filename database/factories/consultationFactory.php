<?php

namespace Database\Factories;

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
            "time" => $this->faker->time($format = 'H:i', rand(8,68400 )) 
        ];
    }
}
