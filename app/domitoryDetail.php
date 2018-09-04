<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class domitoryDetail extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $guarded  =[];
    public  function  studentaccommodation()
    {
        return $this->hasMany(studentAccommodationDetail::class);
    }
}
