<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pays = $this->faker->country;
        $ville = $this->faker->city;
        return [
            'nom' =>$this->faker->lastName,
            'prenom' =>$this->faker->firstName,
            'sexe' => array_rand(['M', 'F'],1),
            'dateNaissance' =>$this->faker->dateTimeBetween("1980-01-01", "2001-12-30"),
            'lieuNaissance' =>"$pays, $ville",
            'nationalite' =>$this->faker->country,   
            'ville' => $ville,   
            'pays' => $pays,   
            'adresse' =>$this->faker->address,   
            'telephone_1' =>$this->faker->phoneNumber,   
            'telephone_2' =>$this->faker->phoneNumber,   
            'pieceIdentite' =>array_rand(['CNI','PASSPORT', 'PERMIS DE CONDUIRE']),   
            'numeroPieceIdentite' =>$this->faker->creditCardNumber,   
        ];
    }
}
