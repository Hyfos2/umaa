<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubLevelsTable extends Migration
{
    
    public function up()
    {
        Schema::create('sub_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('levelId')->unsigned();
            $table->foreign('levelId')->references('id')->on('levels');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('sub_levels');
    }
}
