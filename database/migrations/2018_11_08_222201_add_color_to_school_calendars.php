<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColorToSchoolCalendars extends Migration
{
    
    public function up()
    {
        Schema::table('school_calendars', function($table) {
        $table->string('color')->nullable();
    });
    }

   
    public function down()
    {
         Schema::table('school_calendars', function($table) {
        $table->dropColumn('color')->nullable();
    });
    }
}
