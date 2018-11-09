<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolCalendarsTable extends Migration
{

    public function up()
    {
        Schema::create('school_calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->string('description');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('school_calendars');
    }
}
