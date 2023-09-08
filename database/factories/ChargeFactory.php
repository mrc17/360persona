<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Charge;

class ChargeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Charge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nbrFille = $this->faker->numberBetween(0, 10);
        $nbrGarcon = $this->faker->numberBetween(0, 10);

        return [
            'NbrEnfant' => $nbrFille + $nbrGarcon,
            'NbrFille' => $nbrFille,
            'NbrGarcon' => $nbrGarcon,
            'Scolarise' => $this->faker->numberBetween(0, 5),
        ];
    }
}
