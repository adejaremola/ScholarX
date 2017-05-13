<?php

use Illuminate\Database\Seeder;

use App\AcademicProfile;

use Faker\Factory as Faker;

class SponsorApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = AcademicProfile::lists('id')->toArray();
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('sponsor_applications')->insert([
	            'academic_profile_id' => $faker->unique()->randomElement($profiles),
	            'amount' => $faker->randomFloat(2, 1, 9) * 100,
	            'profile' => implode($faker->paragraphs(2)),
	            'status' => $faker->numberBetween(0, 3)     
	        ]);
        }
    }
}
