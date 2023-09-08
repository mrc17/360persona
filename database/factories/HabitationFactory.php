<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Habitation;

class HabitationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habitation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $SituationMatrimoliale = ['Celibataire', 'Mari'];
        $RegimeMatrimoliale = ['Separation', 'Communaute de bien'];

        return [
            'Ville' => $this->faker->city,
            'Commune' => $this->faker->citySuffix,
            'Quartier' => $this->faker->streetName,
            'SituationMatrimoliale' => $this->faker->randomElement($SituationMatrimoliale),
            'RégimeMatrimoliale' => $this->faker->randomElement($RegimeMatrimoliale),
            'id_Assurance' => $this->faker->randomNumber(1, 12), // Assuming a 2-digit random number.
            'id_finance' => $this->faker->randomNumber(1, 733),  // Assuming a 2-digit random number.
            'organisation_id' => $this->faker->randomNumber(1, 401), // Assuming a 3-digit random number.
            'charge_id' => $this->faker->randomNumber(1, 321), // Assuming a 3-digit random number.
        ];
    }
}
