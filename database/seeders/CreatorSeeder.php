<?php

namespace Database\Seeders;

use App\Models\Creator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CreatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 50; $i++) {
            $newCreator = new Creator();
            $newCreator->nome = $faker->unique()->name();
            $newCreator->data_di_nascita = $faker->date();
            $newCreator->save();

        }
    }
}
