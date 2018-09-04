<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $guarded  =[];

    public function position()
    {
        return $this->belongsToMany(Position::class,'positionId','id');
    }

    public function register()
    {
        return $this->hasMany(cleanerRegister::class);
    }
    public function roaster()
    {
        return $this->hasMany(cleaningRoaster::class);
    }

}
