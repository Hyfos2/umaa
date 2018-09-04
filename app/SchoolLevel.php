<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolLevel extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
}
