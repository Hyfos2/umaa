<?php
/**
 * Created by PhpStorm.
 * User: Hyfos2
 * Date: 8/20/2018
 * Time: 10:28 AM
 */

namespace App\Services;

use App\activityLog;
use App\schoolCalendar;
use App\User;
use App\Admin;
use App\UserDeviceInformation;
use App\userTypes;
use App\UserVisitedLink;
use Carbon\Carbon;
use Auth;
use Jenssegers\Agent\Agent;

class UserActivitiyService
{
    public function userActivities($activity)
    {
       return activityLog::create([
            'name'=>$activity,
            'userId'=>\Auth::user()->id,
            'deviceInfo'=>null,
            'ipAddress'=>null,
            'physicalLocation'=>null,
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
    public  function  userLogsActivities($id)
    {
        return UserDeviceInformation::where('id',$id)->first();
    }
    public  function  activityDetails($id)
    {
        return activityLog::where('id',$id)->first();
    }
    protected function checkDateIfIsEmpty($date)
    {
        if(empty($date))
            return "ttr";
    }
    public  function  addNewAdmin($user,$request)
    {
        return Admin::create([
                'userId'=>$user->id,
                'dob'=>$request->dob
        ]);
    }
    public function  getAdmins()
    {
        return Admin::with('user')->get();
    }
    public function  getUserActivities($id)
    {
        return activityLog::with('user')->where('userId',$id)->get();
    }
    public function  getUserVisitedUrls($id)
    {
        return UserVisitedLink::with('user')->where('userId',$id)->get();
    }
     public  function  allUsersLogs()
    {
           return UserDeviceInformation::with('user')->get();
         // return array_unique((array)$data);
    }


}