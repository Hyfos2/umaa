<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSubjectsTable extends Migration
{
    
    public function up()
    {
        Schema::create('student_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->integer('subjectId')->unsigned();
            $table->string('edited')->default(0);
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->foreign('studentId')->references('id')->on('students');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_subjects');
    }
}
