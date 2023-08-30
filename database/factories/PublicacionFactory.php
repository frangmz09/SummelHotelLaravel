<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicacion>
 */
class PublicacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->word(20),
            'precio'=>fake()->numberBetween($min = 10000, $max = 90000),
            'huespedes'=>fake()->numberBetween($min = 1, $max = 5),
            'descripcion'=>fake()->text(80),
            'superficie'=>fake()->numberBetween($min = 20, $max = 255),
            'imagen'=>fake()->url(),
        ];
    }
}
