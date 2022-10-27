<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetVaccines>
 */
class PetVaccinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return [
                'pet_id' => Pet::inRandomOrder()->first()->id,
                'vaccine_id' => Vaccine::inRandomOrder()->first()->id,
                'vaccineDate' => now(),
            ];
    }
}
