<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class StudentSubject extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $guarded =[];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class,'subjectId','id');
    }
}
