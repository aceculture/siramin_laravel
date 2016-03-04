<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicePort extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_port', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('device_token');
            $table->integer('port_number');
            $table->boolean('status');
            $table->string('plant_type');
            $table->integer('moisture_threshold', false, false);
            $table->enum('watering_method', ['semi', 'otomasi']);
            $table->string('location');
            $table->integer('current_moisture', false, false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('device_port');
    }
}
