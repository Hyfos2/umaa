<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('teacher_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacherId')->unsigned();
            $table->integer('subjectId')->unsigned();
            $table->foreign('teacherId')->references('id')->on('teachers');
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('teacher_subjects');
    }
}
