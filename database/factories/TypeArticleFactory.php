<?php

namespace Database\Factories;

use App\Models\TypeArticle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeArticle>
 */
class TypeArticleFactory extends Factory
{
    protected $model = TypeArticle::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => array_rand(['Immobilier', 'Appareils Electroniques', 'Salle', 'Voiture'], 1)
        ];
    }
}
