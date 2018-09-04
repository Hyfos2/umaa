<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAwardsTable extends Migration
{
    public function up()
    {
        Schema::create('student_awards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->string('event');
            $table->string('description');
            $table->date('date');
            $table->foreign('studentId')->references('id')->on('students');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_awards');
    }
}
