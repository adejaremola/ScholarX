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
            $table->integer('sponsor_id')->unsigned()->default(0);
            $table->integer('academic_profile_id')->unsigned()->default(0);
            $table->foreign('sponsor_id')->references('id')->on('sponsors')->onDelete('cascade');
            $table->foreign('academic_profile_id')->references('id')->on('academic_profiles')->onDelete('cascade');
            $table->float('amount', 12);
            $table->text('profile');
            $table->enum('status', [0, 1, 2, 3]);
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
