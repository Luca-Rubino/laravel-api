<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $Projects = Project::all()->pluck('id');
        for ($i=0; $i < 15; $i++) {
            $newProject = new Project();
            $newProject->type_id = $faker->randomElement($Projects);
            $newProject->name = $faker->word();
            $newProject->last_name = $faker->word();
            // $newProject->due_to = $faker->dateTime();
            // $newProject->url = $faker->imageUrl(360, 360, 'projects', true);
            $newProject->save();
        }
    }
}