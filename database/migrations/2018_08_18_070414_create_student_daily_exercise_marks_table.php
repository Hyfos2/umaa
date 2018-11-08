<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDailyExerciseMarksTable extends Migration
{
    public function up()
    {
        Schema::create('student_daily_exercise_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->integer('teacherId')->unsigned();
            $table->integer('subjectId')->unsigned();
            $table->integer('dailyExerciseId')->unsigned();
            $table->integer('mark')->unsigned();
            $table->string('comment');
            $table->foreign('studentId')->references('id')->on('students');
            $table->foreign('teacherId')->references('id')->on('teachers');
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->foreign('dailyExerciseId')->references('id')->on('daily_exercises');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('student_daily_exercise_marks');
    }
}
