<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_applications', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('sponsor_id')->unsigned()->nullable();
            $table->integer('academic_profile_id')->unsigned()->default(0);
            $table->float('amount', 12);
            $table->float('charge', 12);
            $table->float('total', 12);
            $table->text('profile');
            $table->enum('status', [0, 1, 2, 3, 4]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sponsor_applications');
    }
}
