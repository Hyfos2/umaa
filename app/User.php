<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    use SoftDeletes;
    protected $hidden = [
        'remember_token','userName','password'
    ];
    protected $dates  =['deleted_at'];
    protected $guarded  =[];

    public function type()
    {
        return $this->belongsTo(userTypes::class);
    }
    public function subtype()
    {
        return $this->belongsTo(subUserType::class);
    }
    public function teacher()
    {
        return $this->hasOne(teacher::class,'id','userId');
    }
    public function student()
    {
        return $this->hasOne(Student::class,'userId','id');
    }
    public function level()
    {
        return $this->hasOne(Level::class);
    }
    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
    public function deviceInformation()
    {
        return $this->hasMany(UserDeviceInformation::class,'userId','id');
    }
    public function activity()
    {
        return $this->hasMany(activityLog::class,'id','userId');
    }
    public function urlroute()
    {
        return $this->hasMany(UserVisitedLink::class,'id','userId');
    }

}
