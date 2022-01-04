<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class patientFactory extends Factory
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
            'name' => $this->faker->name(),
            'naissance' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'numeroderegistrenational' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            // 'genre' => $this->faker-> title($gender = null|'male'|'female'),
            'adresse' => $this->faker->streetAddress(),
            'pays' => $this->faker->country(),
            'ville' => $this->faker->city(),
            'codepostal' => $this->faker->postcode(),
            'telephone' => $this->faker->phoneNumber(),
            'personnedecontact' => $this->faker->name(),
            'numerocontact' => $this->faker->phoneNumber(),
        ];
    }
}
