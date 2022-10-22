<?php

namespace Database\Factories;

use App\Models\Enclos;
use App\Models\Pet;
use App\Models\Sterilization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'type' => $this->faker->text(5),
            'race' => $this->faker->text(5),
            'age' => $this->faker->randomNumber(2),
            'captureDate' => now(),
            'enclos_id' => Enclos::inRandomOrder()->first()->id,
        ];
    }
}
