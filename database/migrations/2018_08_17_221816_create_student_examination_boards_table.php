<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentExaminationBoardsTable extends Migration
{
    public function up()
    {
        Schema::create('student_examination_boards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->integer('examinationBoard')->unsigned();
            $table->foreign('studentId')->references('id')->on('students');
            $table->foreign('examinationBoard')->references('id')->on('examination_boards');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('student_examination_boards');
    }
}
