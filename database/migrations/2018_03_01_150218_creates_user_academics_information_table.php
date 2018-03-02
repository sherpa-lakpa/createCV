<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesUserAcademicsInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_academic_informations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->string('pschool_name');
            $table->string('pschool_date');
            $table->string('pschool_per');
            $table->string('pschool_subject');
            $table->string('pschool_board');

            $table->string('hschool_name');
            $table->string('hschool_date');
            $table->string('hschool_per');
            $table->string('hschool_subject');
            $table->string('hschool_board');

            $table->string('bachelore_name');
            $table->string('bachelore_date');
            $table->string('bachelore_per');
            $table->string('bachelore_subject');
            $table->string('bachelore_board');
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
        Schema::dropIfExists('user_academic_informations');
    }
}
