<?php

use Illuminate\Database\Seeder;
use App\Category;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
          \App\Category::create([
            'name' => $faker->name
          ]);
        }
    }
}
