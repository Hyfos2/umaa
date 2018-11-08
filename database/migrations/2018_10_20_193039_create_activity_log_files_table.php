<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLogFilesTable extends Migration
{
    public function up()
    {
        Schema::create('activity_log_files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activityLogId')->unsigned();
            $table->string('fileUrl');
            $table->string('fileName');
            $table->foreign('activityLogId')->references('id')->on('activity_logs');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('activity_log_files');
    }
}
