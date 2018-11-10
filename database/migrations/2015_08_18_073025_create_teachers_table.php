<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->integer('schoolLevel')->unsigned();
            $table->integer('levelId')->unsigned();
            $table->integer('subLevelId')->unsigned();
            $table->date('dob');
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('schoolLevel')->references('id')->on('school_levels');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->foreign('subLevelId')->references('id')->on('sub_levels');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
