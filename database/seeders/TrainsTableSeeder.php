<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->company_name = $faker->company;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $newTrain->departure_date = $faker->date();
            $newTrain->arrival_date = $faker->date();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->code = $faker->regexify('[A-Za-z0-9]{15}');
            $newTrain->carriages_number = $faker->randomNumber(2, false);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_canceled = $faker->boolean();
            $newTrain->save();
        }
    }
}
