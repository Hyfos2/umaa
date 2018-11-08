<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class teacherWork extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    public  function  subject()
    {
        return $this->hasMany(Subject::class,'id','subjectId');
    }
    public  function  level()
    {
        return $this->hasMany(Level::class,'id','levelId');
    }
    public  function  sublevel()
    {
        return $this->hasMany(SubLevel::class,'id','subLevelId');
    }

    public  function  teacher()
    {
        return $this->belongsTo(teacher::class);
    }
}
