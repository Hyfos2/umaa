<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryTypesTable extends Migration
{
    public function up()
    {
        Schema::create('entry_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('entry_types');
    }
}
