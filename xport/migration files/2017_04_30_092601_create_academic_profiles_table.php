<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_profiles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('institution');
            $table->string('faculty')->nullable();
            $table->string('department')->nullable();
            $table->integer('level');
            $table->float('cgpa')->nullable();
            $table->string('pic_url');
            $table->enum('category', [1, 2]);
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
        Schema::drop('academic_profiles');
    }
}
