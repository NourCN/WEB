<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

class CollaborateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'civilite'=>$this->faker->randomElement(['Homme', 'Femme','Non-binaire']),
            'nom' => $this->faker->unique()->lastName(),
            'prenom' => $this->faker->unique()->firstName(),
            'rue' => $this->faker->streetAddress(),
            'code_postal' => $this->faker->regexify('[0-9]{5}'),
            'ville' => $this->faker->city(),
            'numero' => $this->faker->unique()->regexify('(\+33)[0-9]{9}'),
            'email' => $this->faker->unique()->safeEmail(),
            'entreprise_id'=>$this->faker->numberBetween(1,10)  
        ];
    }
}
