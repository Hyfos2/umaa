<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimarySubLevelsTable extends Migration
{
    public function up()
    {
        Schema::create('primary_sub_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('primaryLevelId')->unsigned();
            $table->foreign('primaryLevelId')->references('id')->on('primary_levels');
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('primary_sub_levels');
    }
}
