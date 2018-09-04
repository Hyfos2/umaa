<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectMarksTable extends Migration
{
    public function up()
    {
        Schema::create('subject_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subjectId')->unsigned();
            $table->integer('studentId')->unsigned();
            $table->string('comment');
            $table->integer('mark')->unsigned();
            $table->string('grade')->nullable();
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->foreign('studentId')->references('id')->on('students');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subject_marks');
    }
}
