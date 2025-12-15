<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artiste;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Realisation>
 */
class RealisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artiste_id'=> Artiste::inrandomorder()->value('id'),
            'titre' => fake('fr-FR')->text(50),
            'description' => fake('fr-FR')->sentence(),
            'imageUrl' => fake('fr-FR')->text(255),
            
            
        ];
    }
}
