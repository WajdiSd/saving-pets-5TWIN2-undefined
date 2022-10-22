<?php

namespace Database\Seeders;

use App\Models\Enclos;
use Illuminate\Database\Seeder;

class EnclosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enclos::factory(10)->create();
    }
}
