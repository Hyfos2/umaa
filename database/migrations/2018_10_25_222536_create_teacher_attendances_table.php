<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('absenteeism');
            $table->integer('levelId')->unsigned();
            $table->integer('class')->nullable();
            $table->integer('teacherId')->unsigned();
            $table->integer('subjectId')->unsigned();
            $table->date('date');
            $table->time('time');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->foreign('teacherId')->references('id')->on('teachers');
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_attendances');
    }
}
