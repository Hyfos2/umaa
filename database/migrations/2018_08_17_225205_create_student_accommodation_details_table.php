<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAccommodationDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('student_accommodation_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->integer('hostelName')->unsigned();
            $table->string('roomNumber')->unique();
            $table->date('date');
            $table->string('period');
            $table->foreign('studentId')->references('id')->on('students');
            $table->foreign('hostelName')->references('id')->on('domitory_details');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_accommodation_details');
    }
}
