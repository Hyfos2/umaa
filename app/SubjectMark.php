<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SubjectMark extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    public function student()
    {
        return $this->morphedByMany(Student::class);
    }
    public function subject()
    {
        return $this->morphedByMany(Subject::class);
    }
}
