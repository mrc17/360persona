<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Fiche;

class FicheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fiche::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dateFiche' => $this->faker->date,        // Assuming 'dateFiche' is a date field.
            'numfiche' => $this->faker->unique()->numberBetween(1000, 9999),  // Assuming 'numfiche' is a unique random number.
            'codefiche' => $this->faker->word,       // Assuming 'codefiche' is a word field.
            'zonefiche' => $this->faker->city,   // Assuming 'zonefiche' is a sentence or text field.
            'ordrefiche' => $this->faker->randomDigit, // Assuming 'ordrefiche' is a random digit.
        ];
    }
}
