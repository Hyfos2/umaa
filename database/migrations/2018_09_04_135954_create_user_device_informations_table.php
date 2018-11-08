<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDeviceInformationsTable extends Migration
{

    public function up()
    {
        Schema::create('user_device_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->string('deviceInformation');
            $table->ipAddress('deviceIpAddress');
            $table->dateTime('logIn')->nullable();
            $table->dateTime('logOut')->nullable();
            $table->foreign('userId')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_device_informations');
    }
}
