<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectLevelsTable extends Migration
{
    public function up()
    {
        Schema::create('subject_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subjectId')->unsigned();
            $table->integer('levelId')->unsigned();
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('subject_levels');
    }
}
