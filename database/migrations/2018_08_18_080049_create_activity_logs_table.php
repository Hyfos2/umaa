<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLogsTable extends Migration
{
    public function up()
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('userId')->unsigned();
            $table->datetime('date');
            $table->string('deviceInfo');
            $table->string('IpAddress');
            $table->string('physicalLocation');
            $table->foreign('userId')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('activity_logs');
    }
}
