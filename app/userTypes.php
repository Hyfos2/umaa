<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class userTypes extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $guarded  =[];
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
