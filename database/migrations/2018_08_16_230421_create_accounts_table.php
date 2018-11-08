<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->decimal('debit')->nullable()->default(0);
            $table->string('term')->nullable();
            $table->string('description')->nullable();
            $table->string('reference')->nullable();
            $table->decimal('balance')->nullable();
            $table->decimal('credit')->nullable()->default(0);
            $table->foreign('studentId')->references('id')->on('students');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
