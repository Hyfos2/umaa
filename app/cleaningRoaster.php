<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cleaningRoaster extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $guarded  =[];

    public  function  staff()
    {
        return $this->belongsTo(Staff::class);
    }
    public  function  woarkarea()
    {
        return $this->belongsTo(workingArea::class);
    }
}
