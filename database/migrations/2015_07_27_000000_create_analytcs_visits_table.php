<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalytcsVisitsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analytcs_visits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid');
            $table->string('ip');
            $table->string('location');
            $table->string('referrer');
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
        Schema::drop('analytcs_visits');
    }

}
