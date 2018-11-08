<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVisitedLink extends Model
{

    public  function user()
    {
        $this->belongsTo(User::class,'userId','id');
    }
}
