<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentDailyExerciseMark extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    public  function  subject()
    {
        return $this->belongsTo(Subject::class,'subjectId','id');

    }
    public  function  level()
    {
        return $this->belongsTo(Level::class,'levelId','id');
    }
}
