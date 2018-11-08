<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubLevel extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function teacherwork()
    {
        return $this->belongsTo(teacherWork::class);
    }
     public  function timetable()
    {
        return $this->hasMany(TimeTable::class);
    }

}
