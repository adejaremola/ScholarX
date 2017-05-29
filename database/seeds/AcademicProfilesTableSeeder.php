<?php

use Illuminate\Database\Seeder;

use App\User;

use Faker\Factory as Faker;

class AcademicProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = User::where('role', '=', 0)->lists('id')->toArray();
        $inde = count($users);
        $faker = Faker::create();
    	foreach (range(1,$inde) as $index) {
	        DB::table('academic_profiles')->insert([
	            'user_id' => $faker->unique()->randomElement($users),
	            'institution' => 'University of '.$faker->firstName,
	            'faculty' => 'Faculty of '.$faker->firstName,
	            'department' => 'Department of '.$faker->firstName,
	            'level' => $faker->numberBetween(1, 6) * 100,
	            'matric_no' => '010/ABA/499',
	            'cgpa' => $faker->randomFloat(2, 0, 5),
	            'pic_url' => $faker->imageUrl($width = 200, $height = 200),
	            'category' => $faker->numberBetween(1, 2),
                'updated_at' => \Carbon\Carbon::now(),
                'created_at' => \Carbon\Carbon::now(),     
	        ]);
        }
    }
}
