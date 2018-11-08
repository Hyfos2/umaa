<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAttendancesTable extends Migration
{
    public function up()
    {
        Schema::create('student_attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('absenteeism');
            $table->string('reason')->nullable();
            $table->integer('studentId')->unsigned();
            $table->integer('subjectId')->unsigned();
            $table->integer('teacherId')->unsigned();
            $table->date('date');
            $table->time('time');
            $table->foreign('studentId')->references('id')->on('students');
            $table->foreign('teacherId')->references('id')->on('teachers');
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_attendances');
    }
}
