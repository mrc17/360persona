<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activite>
 */
class ActiviteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "Activite1" => $this->faker->jobTitle,
            "Denomination" => $this->faker->sentence,
            "Localisation1" => $this->faker->city,
            "numRccm" => $this->faker->creditCardNumber,
            "Activite2" => $this->faker->jobTitle,
            "numeroDeLaDfe" => $this->faker->creditCardNumber,
            "Localisation2" => $this->faker->city,
            "numcnps" => $this->faker->creditCardNumber,
            "Projet" => $this->faker->sentence,
            "CoutestimatifEnlettre" => rand(1000, 100000000),
            "CoutestimatifEnchiffre" => $this->faker->sentence
        ];
    }
}
