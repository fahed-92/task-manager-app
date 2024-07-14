<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i = 1; $i <= 5; $i++) {
            $s = DB::table('projects')->insert([
                'name' => $faker->sentence(1),
                'description' => $faker->sentence(15),
                'status' => $faker->numberBetween(1,5),
                'board_id' => $faker->numberBetween(1,10),
                'duration' => $faker->date(),
                'exp_duration' => $faker->date(),
                'cost' => $faker->numberBetween(1000,100000),
                'active_hour' => $faker->numberBetween(50,100),
            ]);
        }
    }
}
