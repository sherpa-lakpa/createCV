<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesUserProfileInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile_informations', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('bullet1');
            $table->string('bullet2');
            $table->string('bullet3');
            $table->string('bullet4');
            $table->string('bullet5');
            $table->string('bullet6');

            $table->string('objective');
            $table->string('declaration');
            
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
        Schema::dropIfExists('user_profile_informations');
    }
}
