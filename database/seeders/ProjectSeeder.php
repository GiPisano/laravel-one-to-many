<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 25; $i++){
            $project = new project;
            $project->title = $faker->sentence();
            $project->description = $faker->paragraph();
            $project->author = $faker->name();
            $project->save();
        }

    }
}
