<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\SubLevel;

class Level extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];

    public function sub()
    {
        return $this->hasMany(SubLevel::class,'levelId','id');
    } 
    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
    public function teacherlevel()
    {
        return $this->hasMany(teacher::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function teacher()
    {
        return $this->belongsTo(teacherWork::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function dailyexercise()
    {
        return $this->hasMany(DailyExercise::class,'id','levelId');
    }
     public  function timetable()
    {
        return $this->hasMany(TimeTable::class);
    }


}
