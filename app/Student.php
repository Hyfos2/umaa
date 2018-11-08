<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $guarded =[];
    public function sport()
    {
        return $this->hasMany(StudentSport::class,'studentId','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'userId','id');
    }
    public function level()
    {
        return $this->belongsTo(Level::class,'levelId','id');
    }
    public function sublevel()
    {
        return $this->belongsTo(SubLevel::class,'subLevelId','id');
    }
    public function subjectmark()
    {
        return $this->morphToMany( SubjectMark::class,'subject_marks');
    }
    public function accommodation()
    {
        return $this->hasMany( studentAccommodationDetail::class);
    }

}
