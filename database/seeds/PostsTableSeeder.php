<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
	        DB::table('posts')->insert([
	            'user_id' => $faker->randomDigit,
	            'content' => $faker->name,
	        ]);
	    }
    }
}
