<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor_log', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('port_id');
            $table->integer('moisture', false, false);
            $table->integer('temperature', false, false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sensor_log');
    }
}
