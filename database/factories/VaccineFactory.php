<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\TypeVaccine;
use App\Models\Veterinarian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vaccine>
 */
class VaccineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomNumber(3),
            'validity' => $this->faker->boolean(50),
            'quantity' => $this->faker->randomNumber(3),
            'type_vaccine_id' => TypeVaccine::inRandomOrder()->first()->id,

        ];
    }
}
