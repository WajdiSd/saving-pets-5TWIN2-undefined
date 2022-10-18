<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\TypeVaccine;
use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VaccinePetFactory extends Factory
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
        ];
    }
}
