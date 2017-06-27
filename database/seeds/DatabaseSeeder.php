<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	Eloquent::unguard();
        
        $this->call('UsersTableSeeder');
        $this->call('AcademicProfilesTableSeeder');
        $this->call('SponsorApplicationsTableSeeder');
        $this->call('SponsorPaymentsTableSeeder');

        // $this->command->info('Users Table seeded');
        
    }
}
