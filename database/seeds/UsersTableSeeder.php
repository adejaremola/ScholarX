<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,35) as $index) {
	        DB::table('users')->insert([
	            'name' => $faker->name,
	            'email' => $faker->email,
                'password' => bcrypt('secret'),
                'role' => $faker->numberBetween(0, 2),
                'updated_at' => \Carbon\Carbon::now(),
	            'created_at' => \Carbon\Carbon::now(),
	        ]);
        }
    }
}

