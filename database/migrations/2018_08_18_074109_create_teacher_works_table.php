<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_works', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacherId')->unsigned();
            $table->integer('levelId')->unsigned();
            $table->integer('subLevelId')->unsigned();
            $table->integer('subjectId')->unsigned()->nullable();
            $table->foreign('teacherId')->references('id')->on('teachers');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->foreign('subLevelId')->references('id')->on('sub_levels');
            $table->softDeletes();
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
        Schema::dropIfExists('teacher_works');
    }
}
