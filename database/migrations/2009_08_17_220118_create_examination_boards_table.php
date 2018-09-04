<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaminationBoardsTable extends Migration
{

    public function up()
    {
        Schema::create('examination_boards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('examination_boards');
    }
}
