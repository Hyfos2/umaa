<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSportsTable extends Migration
{
    public function up()
    {
        Schema::create('student_sports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->integer('sportId')->unsigned();
            $table->foreign('studentId')->references('id')->on('students');
            $table->foreign('sportId')->references('id')->on('sports');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('student_sports');
    }
}
