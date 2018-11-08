<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Subject extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $guarded  =[];
    public function teachersub()
    {
        return $this->belongsTo(TeacherSubject::class);
    }
    public function board()
    {
        return $this->belongsTo(examinationBoard::class,'examinationBoard','id');
    }
    public function schoollevel()
    {
        return $this->belongsTo(SchoolLevel::class,'schoolLevel','id');
    }
    public function studentsub()
    {
        return $this->hasMany(StudentSubject::class);
    }
    public  function teacherwork()
    {
        return $this->belongsTo(teacherWork::class);
    }
    public  function attendance()
    {
        return $this->hasMany(studentAttendance::class.'id','subjectId');
    }
    public function dailyexercise()
    {
        return $this->hasMany(DailyExercise::class,'id','subjectId');
    }
     public  function timetable()
    {
        return $this->hasMany(TimeTable::class);
    }
}
