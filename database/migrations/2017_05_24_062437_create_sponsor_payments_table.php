<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount', 12);
            $table->integer('sponsor_application_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::drop('sponsors');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sponsor_payments');

        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount', 12);
            $table->float('charge', 12);
            $table->integer('sponsor_application_id')->nullable()->unsigned()->default(0);
            $table->timestamps();
        });
    }
}
