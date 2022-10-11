<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeReward;

class TypeRewardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typerewards = [
            ['type' => 'Physical',
            'description' => 'Physical rewards are tangible items that can be shipped to the recipient.'],
            ['type' => 'Digital',
            'description' => 'Digital rewards are items that can be sent to the recipient via email.'],
            ['type' => 'Service',
            'description' => 'Service rewards are items that can be sent to the recipient via email.'],
        ];
        foreach($typerewards as $type){
            TypeReward::create($type);
        }
    }
}
