<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    public function up()
    {
        Schema::create('parent_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->integer('studentId')->unsigned();
            $table->string('address');
            $table->string('cellphone');
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('studentId')->references('id')->on('students');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parent_students');
    }
}
