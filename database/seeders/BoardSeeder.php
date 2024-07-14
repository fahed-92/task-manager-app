<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardSeeder extends Seeder
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
            $s = DB::table('boards')->insert([
                'name' => $faker->sentence(1),
                'project_number' => $faker->numberBetween(1,10),
                'user_id' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
