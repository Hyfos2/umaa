<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDeviceInformation extends Model
{
    protected $guarded  = [];
    public  function user()
    {
        return $this->belongsTo(User::class,'userId','id');
    }
}
