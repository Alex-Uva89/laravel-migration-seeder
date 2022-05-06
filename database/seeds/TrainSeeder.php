<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    
    public function run(Faker $faker)
    {
        for ($i=0; $i < 1000; $i++) { 
            $TrainsData = 
            [
                'agency' => $faker->company(),
                'number_of_carriages' => $faker->numberBetween(1, 12),
                'departure_city' => $faker->city(),
                'arrival_city' => $faker->city(),
                'departure_day' => $faker->date(),
                'departure_time' => $faker->time(),
                'in_time' => $faker->numberBetween(0 , 1),
                'is_active' => $faker->numberBetween(0 , 1),
                'code_train' => $faker->bothify('??#?##???#'),
            ];
            
            $Train = new Train();
            $Train->fill($TrainsData);
            $Train->save();
        }
    }
}
