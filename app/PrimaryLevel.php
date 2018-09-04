<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrimaryLevel extends Model
{

    public function primarysublevel()
    {
        return $this->hasMany(PrimarySubLevel::class,'primaryLevelId','id');
    }
}
