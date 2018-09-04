<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentAccommodationDetail extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $gaurded  =[];
    public  function student()
    {
        return $this->belongsTo(Student::class);
    }
    public  function hostel()
    {
        return $this->belongsTo(domitoryDetail::class);
    }
}
