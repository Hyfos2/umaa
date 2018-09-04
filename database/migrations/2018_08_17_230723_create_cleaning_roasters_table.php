<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCleaningRoastersTable extends Migration
{
    public function up()
    {
        Schema::create('cleaning_roasters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staffId')->unsigned();
            $table->string('day');
            $table->integer('areaOfWork')->unsigned();
            $table->foreign('areaOfWork')->references('id')->on('working_areas');
            $table->foreign('staffId')->references('id')->on('staff');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('cleaning_roasters');
    }
}
