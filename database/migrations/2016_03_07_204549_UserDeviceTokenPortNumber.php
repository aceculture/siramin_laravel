<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDeviceTokenPortNumber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_device', function (Blueprint $table) {
            $table->string('device_token');
            $table->integer('port_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_device', function (Blueprint $table) {
            $table->dropColumn('device_token');
            $table->dropColumn('port_number');
        });
    }
}
