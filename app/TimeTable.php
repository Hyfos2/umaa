<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    protected $guarded =[];

    public function level()
    {
    	return $this->belongsTo(Level::class,'levelId','id');
    }

    public function sublevel()
    {
    	return $this->belongsTo(SubLevel::class,'subLevelId','id');
    }
    public function subject()
    {
    	return $this->belongsTo(Subject::class,'subjectId','id');
    }
}
