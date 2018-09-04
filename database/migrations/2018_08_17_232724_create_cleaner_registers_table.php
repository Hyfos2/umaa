<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCleanerRegistersTable extends Migration
{
    public function up()
    {
        Schema::create('cleaner_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('staffId')->unsigned();
            $table->string('present');
            $table->string('absent');
            $table->string('comment')->nullable();
            $table->string('reason')->nullable();
            $table->foreign('staffId')->references('id')->on('staff');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cleaner_registers');
    }
}
