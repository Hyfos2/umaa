<?php

namespace App\Http\Controllers;

use App\ActivityLogFile;
use App\User;
use App\Communication;
use App\activityLog;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\UserDeviceInformation;

class CommunicationController extends Controller
{
    public function index()
    {
        $usersDetails  =UserDeviceInformation::with('user')->get();
        //$communicators  =[];
        $communicators  =[];
        foreach($usersDetails  as $item)
        {
            if($item->user->userTypeId ==7)
            {
                array_push($communicators,$item);
            }
        }
        //return $communicators;

        $users  = array_unique($communicators);
      return view('newAdmin.communication.index',compact('users'));
    }

    public function communicatorProfile($id)
    {
        $userDetails = User::where('id',$id)->first();
        $userActivity  =activityLog::where('userId',$id)->get();
        foreach($userActivity as $item)
        {
            $activityFile  =ActivityLogFile::where('activityLogId',$item->id)->first();
        }

        $latestActivities =[];
        $oldActivities =[];
        foreach($userActivity as $value)
        {
            if($value->created_at !==Carbon::today())
            {
                array_push($oldActivities,$value);
            }
            else{
                array_push($latestActivities,$value);
            }
        }

        return view('newAdmin.communication.communicatorProfile',
             compact('userDetails','userActivity','oldActivities','latestActivities','activityFile'));
    }

    public function store(Request $request)
    {
        Communication::create([
            'userId'=>Auth::user()->id,
            'letterUrl'=>$request->url,
            'letter'=>$request->letter,
            'message'=>$request->message
        ]);
    }

    public function inbox()
    {
          return view('communication.message');
        return view('communication.createMessage');
    }

  
    public function showDashboard()
    {
        return view('communication.dashboard');
    }


    public function onlineParent()
    {
        return view('communication.onlineChat');
    }

    public function composeMessage()
    {
         return view('communication.composeMessage');
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
