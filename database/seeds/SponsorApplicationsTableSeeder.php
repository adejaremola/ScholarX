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
        $count = count($profiles);
        $faker = Faker::create();
    	foreach (range(1,$count) as $index) {
	        DB::table('sponsor_applications')->insert([
	            'academic_profile_id' => $faker->unique()->randomElement($profiles),
                'amount' => $amount = $faker->randomFloat(2, 1, 9) * 100,
	            'charge' => $charge = $amount * (5/100),
                'total' => $amount + $charge,
	            'profile' => $faker->paragraph,
	            'status' => $faker->numberBetween(0, 4),
                'updated_at' => \Carbon\Carbon::now(),
                'created_at' => \Carbon\Carbon::now(),    
	        ]);
        }
    }
}
