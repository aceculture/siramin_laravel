<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVegetableComodity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vegetable_comodity', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('vegetable_name');
            $table->string('unit');
            $table->integer('vegetable_price')->unsigned();
            $table->string('availability');
            $table->string('status_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vegetable_comodity');
    }
}
