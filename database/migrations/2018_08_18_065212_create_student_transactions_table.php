<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTransactionsTable extends Migration
{

    public function up()
    {
        Schema::create('student_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studentId')->unsigned();
            $table->string('reference')->nullable();
            $table->decimal('amountPaid');
            $table->string( 'description');
            $table->foreign('studentId')->references('id')->on('students');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_transactions');
    }
}
