<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class docteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company (),
            'anneedexperience' =>$this->faker->biasedNumberBetween($min = 1, $max = 20, $function = 'sqrt'),
        ];
    }
}
