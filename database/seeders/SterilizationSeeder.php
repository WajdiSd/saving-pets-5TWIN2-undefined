<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\Sterilization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SterilizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sterilization::factory(10)->create();
        Sterilization::factory(10)->has(Pet::factory()->count(1))
            ->create();
    }
}
