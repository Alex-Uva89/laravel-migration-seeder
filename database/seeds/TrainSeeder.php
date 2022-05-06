<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $TrainsData = 
            [
                'agency' => $faker->sentence(50),
                'number_of_carriages' => $faker->numberBetween(1, 12),
                'departure_city' => $faker->city(),
                'arrival_city' => $faker->city(),
                'departure_time' => $faker->date(),
                'in_time' => $faker->numberBetween(0 , 1),
                'is_active' => $faker->numberBetween(0 , 1),
            ];
            
            $TrainsData = new Train();
            $TrainsData->save();
        }
    }
}
