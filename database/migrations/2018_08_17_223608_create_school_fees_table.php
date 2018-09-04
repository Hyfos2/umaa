<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolFeesTable extends Migration
{
    public function up()
    {
        Schema::create('school_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('fees')->nullable();
            $table->decimal('levy')->nullable();
            $table->decimal('busFee')->nullable();
            $table->decimal('accommodation')->nullable();
            $table->integer('modeOfEntry')->unsigned();
            $table->decimal('sportFee');
            $table->decimal('total');
            $table->foreign('modeOfEntry')->references('id')->on('entry_types');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('school_fees');
    }
}
