<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherSubject extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    public function staff()
   {
       return $this->belongsTo(Staff::class,'staffId','id');
   }
    public function subject()
    {
        return $this->belongsTo(Subject::class,'subjectId','id');
    }

}
