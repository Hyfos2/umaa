<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('levelId')->unsigned();
            $table->integer('subLevelId')->unsigned();
            $table->integer('subjectId')->unsigned();
            $table->integer('teacherId')->unsigned();
            $table->string('day');
            $table->time('startTime');
            $table->string('color')->nullable();
            $table->time('endTime');
            $table->foreign('levelId')->references('id')->on('levels');
            $table->foreign('subLevelId')->references('id')->on('sub_levels');
            $table->foreign('subjectId')->references('id')->on('subjects');
            $table->foreign('teacherId')->references('id')->on('teachers');
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
        Schema::dropIfExists('time_tables');
    }
}
