<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherClassesTable extends Migration
{
    public function up()
    {
        Schema::create('teacher_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacherId')->unsigned();
            $table->integer('levelId')->unsigned();
            $table->foreign('teacherId')->references('id')->on('teachers');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_classes');
    }
}
