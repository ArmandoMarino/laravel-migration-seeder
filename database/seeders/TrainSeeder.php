<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Importo il modello nel Seeder
use App\Models\Train;
// Importo il faker generetor insito per creare falsi dati
use Faker\Generator;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $train = new Train();
            $train->company = $faker->word();
            $train->dep_station = $faker->city();
            $train->arr_station = $faker->city();
            $train->dep_time = $faker->dateTime();
            $train->arr_time = $faker->dateTime();
            $train->code_train = $faker->buildingNumber();
            $train->carriage_num = $faker->buildingNumber();
            $train->in_time = $faker->boolean();
            $train->is_deleted = $faker->boolean();

            $train->save();
        }
    }
}
