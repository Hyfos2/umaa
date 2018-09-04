<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlackBooksTable extends Migration
{
    public function up()
    {
        Schema::create('black_books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->string('offence');
            $table->string('description');
            $table->foreign('studentId')->references('id')->on('students');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('black_books');
    }
}
