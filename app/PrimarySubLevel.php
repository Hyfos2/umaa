<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrimarySubLevel extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected  $guarded =[];

    public function primarylevel()
    {
        return $this->belongsTo(PrimaryLevel::class);
    }

}
