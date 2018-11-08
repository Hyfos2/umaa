<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunicatorParentChatsTable extends Migration
{
    public function up()


    {
        Schema::create('communicator_parent_chats', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('communicator_parent_chats');
    }
}

