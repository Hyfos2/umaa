<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomitoryDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('domitory_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('rooms');
            $table->integer('students');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('domitory_details');
    }
}
