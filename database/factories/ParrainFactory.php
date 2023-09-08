<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parrain>
 */
class ParrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            "NomParrain" => $this->faker->lastName,
            "PrenomParrain" => $this->faker->firstName,
            "sexeParrain" => $this->faker->title,
            "ProfessionParrain" => $this->faker->jobTitle,
            "AppreciationParrain" => $this->faker->sentence,
        ];
    }
}
