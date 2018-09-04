<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailableRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('available_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hostelName')->unsigned();
            $table->integer('spaceAvailable');
            $table->foreign('hostelName')->references('id')->on('domitory_details');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('available_rooms');
    }
}
