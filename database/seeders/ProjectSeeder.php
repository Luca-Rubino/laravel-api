<?php

namespace Database\Seeders;

use App\Models\Creator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projectList = [
            [
                "nome" => "laravel-auth",
                "url_repo" => "https://github.com/Luca-Rubino/laravel-auth",
            ],
            [
                "nome" => "laravel-auth-template",
                "url_repo" => "https://github.com/Luca-Rubino/laravel-auth-template",
            ],
            [
                "nome" => "laravel-base-crud",
                "url_repo" => "https://github.com/Luca-Rubino/laravel-base-crud",
            ],
            [
                "nome" => "laravel-migration-seeder",
                "url_repo" => "https://github.com/Luca-Rubino/laravel-migration-seeder",
            ],
            [
                "nome" => "laravel-model-controller",
                "url_repo" => "https://github.com/Luca-Rubino/laravel-model-controller",
            ],
            [
                "nome" => "laravel-comics",
                "url_repo" => "https://github.com/Luca-Rubino/laravel-comics",
            ],
            [
                "nome" => "laravel-10-layout-template",
                "url_repo" => "https://github.com/Luca-Rubino/laravel-10-layout-template",
            ],
            [
                "nome" => "laravel-primi-passi",
                "url_repo" => "https://github.com/Luca-Rubino/laravel-primi-passi",
            ],
            [
                "nome" => "db-university",
                "url_repo" => "https://github.com/Luca-Rubino/db-university",
            ],
            [
                "nome" => "db-first",
                "url_repo" => "https://github.com/Luca-Rubino/db-first",
            ],
            [
                "nome" => "php-oop-2",
                "url_repo" => "https://github.com/Luca-Rubino/php-oop-2",
            ],
            [
                "nome" => "php-snacks-b1",
                "url_repo" => "https://github.com/Luca-Rubino/php-snacks-b1",
            ],
            [
                "nome" => "php-oop-1",
                "url_repo" => "https://github.com/Luca-Rubino/php-oop-1",
            ],
            [
                "nome" => "php-todo-list-json",
                "url_repo" => "https://github.com/Luca-Rubino/php-todo-list-json",
            ],
            [
                "nome" => "php-strong-password-generator",
                "url_repo" => "https://github.com/Luca-Rubino/php-strong-password-generator",
            ],
            [
                "nome" => "php-hotel",
                "url_repo" => "https://github.com/Luca-Rubino/php-hotel",
            ],
            [
                "nome" => "php-badwords",
                "url_repo" => "https://github.com/Luca-Rubino/php-badwords",
            ],
            [
                "nome" => "proj-html-vuejs",
                "url_repo" => "https://github.com/Luca-Rubino/proj-html-vuejs",
            ],
            [
                "nome" => "vite-boolflix",
                "url_repo" => "https://github.com/Luca-Rubino/vite-boolflix",
            ],
            [
                "nome" => "vite-yu-gi-oh",
                "url_repo" => "https://github.com/Luca-Rubino/vite-yu-gi-oh",
            ],
            [
                "nome" => "vite-comics",
                "url_repo" => "https://github.com/Luca-Rubino/vite-comics",
            ],
            [
                "nome" => "vite-hello-world",
                "url_repo" => "https://github.com/Luca-Rubino/vite-hello-world",
            ],
            [
                "nome" => "vue-email-list",
                "url_repo" => "https://github.com/Luca-Rubino/vue-email-list",
            ],
            [
                "nome" => "vue-boolzapp",
                "linguaggio_utilizzato" => " JavaScript",
                "url_repo" => "https://github.com/Luca-Rubino/vue-boolzapp",
            ],
            [
                "nome" => "vue-slider",
                "url_repo" => "https://github.com/Luca-Rubino/vue-slider",
            ],
            [
                "nome" => "vue-todolist",
                "url_repo" => "https://github.com/Luca-Rubino/vue-todolist",
            ],
            [
                "nome" => "vue-hello",
                "url_repo" => "https://github.com/Luca-Rubino/vue-hello",
            ],
            [
                "nome" => "js-snack-es6",
                "url_repo" => "https://github.com/Luca-Rubino/js-snack-es6",
            ],
            [
                "nome" => "js-jsnacks-blocco-3",
                "url_repo" => "https://github.com/Luca-Rubino/js-jsnacks-blocco-3",
            ],
            [
                "nome" => "js-our-team",
                "url_repo" => "https://github.com/Luca-Rubino/js-our-team",
            ],
            [
                "nome" => "js-simon",
                "url_repo" => "https://github.com/Luca-Rubino/js-simon",
            ],

        ];
        $types = type::all()->pluck("id");
        $creators = Creator::all()->pluck("id");

        foreach ($projectList as $singleProject) {
            $newProject = new Project();
            $newProject->type_id = $faker->randomElement($types);
            $newProject->creator_id = $faker->randomElement($creators);
            $newProject->nome = $singleProject["nome"];
            $newProject->url_repo = $singleProject["url_repo"];
            $newProject->save();
        }
    }
}
