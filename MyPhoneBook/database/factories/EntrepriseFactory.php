<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->unique()->company(),
            'rue' => $this->faker->streetAddress(),
            'code_postal' => $this->faker->regexify('[0-9]{5}'),
            'ville' => $this->faker->city(),
            'numero' => $this->faker->unique()->regexify('(\+33)[0-9]{9}'),
            'email' => $this->faker->unique()->safeEmail()
        ];

        
    }
}
