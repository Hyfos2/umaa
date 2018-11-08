<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacherId')->unsigned();
            $table->string('noteUrl');
            $table->string('file')->nullable();
            $table->string('title');
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
        Schema::dropIfExists('subject_notes');
    }
}
