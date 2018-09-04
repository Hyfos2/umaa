<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cleanerRegister extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $guarded  =[];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
