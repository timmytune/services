<?php

use Illuminate\Database\Seeder;

class services extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
         // Let's truncate our existing records to start from scratch.
        services::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            services::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'type' => $faker->sentence,
                'state' => $faker->sentence,
                'city' => $faker->sentence,
            ]);
        }
        
    }
}
