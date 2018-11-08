<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyExercisesTable extends Migration
{
    public function up()
    {
        Schema::create('daily_exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topic');
            $table->integer('subjectId')->unsigned();
            $table->integer('levelId')->unsigned();
            $table->integer('subLevelId')->unsigned();
            $table->integer('total')->unsigned();
            $table->integer('teacherId')->unsigned();
            $table->date('date');
            $table->foreign('teacherId')->references('id')->on('teachers');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->foreign('subLevelId')->references('id')->on('sub_levels');
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daily_exercises');
    }
}
