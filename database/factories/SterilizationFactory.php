<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\Veterinarian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sterilization>
 */
class SterilizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fee' => $this->faker->randomNumber(3),
            'remarks' => $this->faker->text(50),
            'date' => now(),
            'veto_id' => Veterinarian::inRandomOrder()->first()->id,
        ];
    }
}
