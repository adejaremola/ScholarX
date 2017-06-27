<?php

use Illuminate\Database\Seeder;

//use Paystack;

class SponsorPaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsors')->insert([
            'sponsor_application_id' => 3,
            'amount' => 100,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 3,
            'amount' => 100,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 6,
            'amount' => 150,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 8,
            'amount' => 190,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 8,
            'amount' => 500,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 16,
            'amount' => 50,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 21,
            'amount' => 210,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 38,
            'amount' => 109,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 39,
            'amount' => 400,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 39,
            'amount' => 10,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 39,
            'amount' => 100,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 44,
            'amount' => 100,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

        DB::table('sponsors')->insert([
            'sponsor_application_id' => 44,
            'amount' => 350,
            'reference' => Paystack::genTranxRef(),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),    
        ]);

    }
}
