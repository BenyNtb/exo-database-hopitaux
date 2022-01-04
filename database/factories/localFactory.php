<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class localFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero' =>$this->faker->biasedNumberBetween($min = 100, $max = 700, $function = 'sqrt'),
        ];
    }
}
