<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalytcsVisitsTable extends Migration
{
    private $table;

    public function __construct()
    {
        $this->table = config('analytics.visits_table', 'analytics_visits');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');

            $table->string('uuid')->index();
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
        Schema::drop($this->table);
    }
}
