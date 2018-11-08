<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyExercise extends Model
{
    protected  $guarded =[];

    public  function  subject()
    {
        return $this->belongsTo(Subject::class,'subjectId','id');
    }
    public  function  level()
    {
        return $this->belongsTo(Level::class,'levelId','id');
    }
}
