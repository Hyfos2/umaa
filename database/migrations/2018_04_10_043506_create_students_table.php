<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->integer('levelId')->unsigned();
            $table->integer('subLevelId')->unsigned();
            $table->string('parentName');
            $table->string('parentEmail')->unique();
            $table->string('parentPhone')->unique();
            $table->string('allergies')->nullable();
            $table->integer('modeOfEntry')->unsigned()->nullable();
            $table->integer('schoolLevel')->unsigned();
            $table->string('regNumber')->unique(); // year of registration and
            $table->date('dob');
            $table->string('address');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->foreign('subLevelId')->references('id')->on('sub_levels');
            $table->foreign('schoolLevel')->references('id')->on('school_levels');
            $table->foreign('modeOfEntry')->references('id')->on('entry_types');
            $table->foreign('userId')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
