<?php
/**
 * Created by PhpStorm.
 * User: Hyfos2
 * Date: 8/20/2018
 * Time: 10:28 AM
 */

namespace App\Services;

use App\activityLog;
use App\User;
use App\userTypes;
use Carbon\Carbon;
use Auth;

class UserActivitiyService
{

    public function userActivities($activity)
    {
       return activityLog::create([
            'name'=>$activity,
            'userId'=>\Auth::user()->id,
            'date'=>Carbon::now()
        ]);
    }
    public  function  getType($name)
    {
        if(ucfirst($name) == "Admin")
            return userTypes::where('name',$name)->first(['id']);
        if(ucfirst($name) == "Teacher")
            return userTypes::where('name',$name)->first(['id']);
        if(ucfirst($name) == "Student")
            return userTypes::where('name',$name)->first(['id']);
        if(ucfirst($name) == "Supervisor")
            return userTypes::where('name',$name)->first(['id']);
    }

    public  function  userLogs()
    {
        return User::all();
    }

    protected function checkDateIfIsEmpty($date)
    {
        if(empty($date))
            return "ttr";
    }
}