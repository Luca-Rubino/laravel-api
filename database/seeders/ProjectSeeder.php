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
                "url_repo" => "https://github.com/AlesciDavide/laravel-auth",
            ],
            [
                "nome" => "laravel-auth-template",
                "url_repo" => "https://github.com/AlesciDavide/laravel-auth-template",
            ],
            [
                "nome" => "laravel-base-crud",
                "url_repo" => "https://github.com/AlesciDavide/laravel-base-crud",
            ],
            [
                "nome" => "laravel-migration-seeder",
                "url_repo" => "https://github.com/AlesciDavide/laravel-migration-seeder",
            ],
            [
                "nome" => "laravel-model-controller",
                "url_repo" => "https://github.com/AlesciDavide/laravel-model-controller",
            ],
            [
                "nome" => "laravel-comics",
                "url_repo" => "https://github.com/AlesciDavide/laravel-comics",
            ],
            [
                "nome" => "laravel-10-layout-template",
                "url_repo" => "https://github.com/AlesciDavide/laravel-10-layout-template",
            ],
            [
                "nome" => "laravel-primi-passi",
                "url_repo" => "https://github.com/AlesciDavide/laravel-primi-passi",
            ],
            [
                "nome" => "db-university",
                "url_repo" => "https://github.com/AlesciDavide/db-university",
            ],
            [
                "nome" => "db-first",
                "url_repo" => "https://github.com/AlesciDavide/db-first",
            ],
            [
                "nome" => "php-oop-2",
                "url_repo" => "https://github.com/AlesciDavide/php-oop-2",
            ],
            [
                "nome" => "php-snacks-b1",
                "url_repo" => "https://github.com/AlesciDavide/php-snacks-b1",
            ],
            [
                "nome" => "php-oop-1",
                "url_repo" => "https://github.com/AlesciDavide/php-oop-1",
            ],
            [
                "nome" => "php-todo-list-json",
                "url_repo" => "https://github.com/AlesciDavide/php-todo-list-json",
            ],
            [
                "nome" => "php-strong-password-generator",
                "url_repo" => "https://github.com/AlesciDavide/php-strong-password-generator",
            ],
            [
                "nome" => "php-hotel",
                "url_repo" => "https://github.com/AlesciDavide/php-hotel",
            ],
            [
                "nome" => "php-badwords",
                "url_repo" => "https://github.com/AlesciDavide/php-badwords",
            ],
            [
                "nome" => "proj-html-vuejs",
                "url_repo" => "https://github.com/AlesciDavide/proj-html-vuejs",
            ],
            [
                "nome" => "vite-boolflix",
                "url_repo" => "https://github.com/AlesciDavide/vite-boolflix",
            ],
            [
                "nome" => "vite-yu-gi-oh",
                "url_repo" => "https://github.com/AlesciDavide/vite-yu-gi-oh",
            ],
            [
                "nome" => "vite-comics",
                "url_repo" => "https://github.com/AlesciDavide/vite-comics",
            ],
            [
                "nome" => "vite-hello-world",
                "url_repo" => "https://github.com/AlesciDavide/vite-hello-world",
            ],
            [
                "nome" => "vue-email-list",
                "url_repo" => "https://github.com/AlesciDavide/vue-email-list",
            ],
            [
                "nome" => "vue-boolzapp",
                "linguaggio_utilizzato" => " JavaScript",
                "url_repo" => "https://github.com/AlesciDavide/vue-boolzapp",
            ],
            [
                "nome" => "vue-slider",
                "url_repo" => "https://github.com/AlesciDavide/vue-slider",
            ],
            [
                "nome" => "vue-todolist",
                "url_repo" => "https://github.com/AlesciDavide/vue-todolist",
            ],
            [
                "nome" => "vue-hello",
                "url_repo" => "https://github.com/AlesciDavide/vue-hello",
            ],
            [
                "nome" => "js-snack-es6",
                "url_repo" => "https://github.com/AlesciDavide/js-snack-es6",
            ],
            [
                "nome" => "js-jsnacks-blocco-3",
                "url_repo" => "https://github.com/AlesciDavide/js-jsnacks-blocco-3",
            ],
            [
                "nome" => "js-our-team",
                "url_repo" => "https://github.com/AlesciDavide/js-our-team",
            ],
            [
                "nome" => "js-simon",
                "url_repo" => "https://github.com/AlesciDavide/js-simon",
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
