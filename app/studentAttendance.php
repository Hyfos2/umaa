<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentAttendance extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    public function subject()
    {
        return $this->belongsTo(Subject::class,'subjectId','id');
    }
}
