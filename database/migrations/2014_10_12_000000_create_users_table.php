<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
   
    public function up()
    {
        Schema::create('users', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('gender');
            $table->integer('userTypeId')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('imgUrl')->nullable();
            $table->string('userName')->nullable();
            $table->date('lastLogin')->nullable();
            $table->date('lastLogout')->nullable();
            $table->longText('contactPoint')->nullable();
            $table->foreign('userTypeId')->references('id')->on('user_types');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
