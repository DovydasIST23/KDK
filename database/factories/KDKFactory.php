<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kdk>
 */
class KDKFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'gamintojas_id' => $this->faker->numberBetween(1, 12), // Assuming you have 12 manufacturers
            'tipas_id' => $this->faker->numberBetween(1, 6), // Assuming you have 6 types
            'kiekis' => $this->faker->numberBetween(1, 300),
            'aprasas' => $this->faker->sentence(),
            'kaina' => $this->faker->randomFloat(2, 1, 9000),
            'created_at' => now(), 
            'updated_at' => now()
        ];
    }
}
