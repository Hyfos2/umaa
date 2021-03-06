<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class activityLog extends Model
{
    use SoftDeletes;
    protected $dates  =['deleted_at'];
    protected $fillable  =['name','userId','date'];
    public function user()
    {
        return $this->belongsTo(User::class,'userId','id');
    }
}
