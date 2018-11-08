<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('assigned_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacherId')->unsigned();
            $table->integer('subjectId')->unsigned();
            $table->integer('levelId')->unsigned();
            $table->integer('subLevelId')->unsigned();
            $table->integer('examinationBoardId')->unsigned();
            $table->foreign('examinationBoardId')->references('id')->on('examination_boards');
            $table->foreign('teacherId')->references('id')->on('teachers');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->foreign('subLevelId')->references('id')->on('sub_levels');
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assigned_subjects');
    }
}
