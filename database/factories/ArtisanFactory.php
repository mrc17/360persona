<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artisan;

class ArtisanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artisan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom' => $this->faker->lastName,
            'Prenom' => $this->faker->firstName,
            'Dtnaissance' => $this->faker->date,
            'LieuNaissance' => $this->faker->city,
            'Profession' => $this->faker->jobTitle,
            'AnExpProf' => $this->faker->numberBetween(1, 30),
            'Sexe' => $this->faker->randomElement(['Homme', 'Femme']),
            'AnProf' => $this->faker->numberBetween(1, 30),
            'registreMetier' => $this->faker->unique()->randomNumber(5),
            'Email' => $this->faker->unique()->safeEmail,
            'Contact' => $this->faker->phoneNumber,
            'id_parrain' => $this->faker->numberBetween(1, 401), // Utilisez randomNumber() ici.
            'id_habitation' => $this->faker->numberBetween(1, 856), // Utilisez randomNumber() ici.
            'id_agent' => $this->faker->numberBetween(1, 1000), // Utilisez randomNumber() ici.
            'id_fiche' => $this->faker->numberBetween(1, 1000), // Utilisez randomNumber() ici.
            'id_activite' => $this->faker->numberBetween(1, 1000), // Utilisez randomNumber() ici.
        ];
    }
}
