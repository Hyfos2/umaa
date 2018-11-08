<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subjectCode')->unique()->nullable();
            $table->string('name');
            $table->integer('schoolLevel')->unsigned();
            $table->integer('levelId')->unsigned();
            $table->integer('examinationBoard')->unsigned()->nullable();
            $table->foreign('examinationBoard')->references('id')->on('examination_boards');
            $table->foreign('schoolLevel')->references('id')->on('school_levels');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
