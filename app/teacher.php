<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class teacher extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class,'userId','id');
    }

    public function work()
    {
        return $this->hasMany(teacherWork::class,'teacherId','id');
    }

}
