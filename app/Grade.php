<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Grade;

class Grade extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    public function level()
    {
    	return $this->hasMany(Level::class);
    }
}

