<?php

namespace Database\Factories;

use App\Models\TypeVaccine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeVaccine>
 */
class TypeVaccineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => $this->faker->text(50),
            'duration' => $this->faker->randomNumber(3),
        ];
    }
}
