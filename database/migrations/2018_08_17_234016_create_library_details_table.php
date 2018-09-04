<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryDetailsTable extends Migration
{

    public function up()
    {
        Schema::create('library_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bookName');
            $table->string('subjectArea');
            $table->string('authors');
            $table->string('yearOfPublication');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('library_details');
    }
}
