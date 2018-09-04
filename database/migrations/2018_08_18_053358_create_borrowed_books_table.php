<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowedBooksTable extends Migration
{
    public function up()
    {
        Schema::create('borrowed_books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->date('checkout');
            $table->date('returnDate');
            $table->integer('bookDetails')->unsigned();
            $table->foreign('bookDetails')->references('id')->on('library_details');
            $table->foreign('studentId')->references('id')->on('students');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowed_books');
    }
}
