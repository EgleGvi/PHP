<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radars', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('number');
            $table->double('distance');
            $table->double('time');
            $table->double('speed')->nullable();
            $table->integer('driver_id')->nullable();
            $table->integer('creator_id');
            $table->integer('updator_id');
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
        Schema::dropIfExists('radars');
    }
}