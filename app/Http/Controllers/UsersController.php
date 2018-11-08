<?php

namespace App\Http\Controllers;

use App\Services\UserActivitiyService;
use Illuminate\Http\Request;
use App\userTypes;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Rules\LevelErrors;

class UsersController extends Controller
{
    protected $userActivities;
    public function __construct(UserActivitiyService $userActivityService)
    {
        $this->userActivities  =$userActivityService;
    }
    public function index()
    {
       return view('newAdmin.users.index');
    }
    public function create()
    {

    }
    public function addAdmin()
    {
        $type  = $this->userActivities->getType("Admin")->id;
        $admins  = $this->userActivities->getAdmins();
        $permissions  =\App\Permission::orderBy('id','asc')->get();
        $userType  =userTypes::orderBy('id','asc')->get();
        //return $admins;
        //return $permissions;
        return view('newAdmin.users.addAdmin',compact('type','admins','permissions','userType'));
    }
    public function userAdmins()
    {
         return $this->userActivities->getAdmins();
    }
    public function store(Request $request)
    {
        return "add an admin here";
    }
    public function userLogs($id)
    {
        return $this->userActivities->userLogs($id);
    }
    public function show($id)
    {
        return "users";
    }
    public function activityDetails($id)
    {
        return $this->userActivities->activityDetails($id);
    }
    public function userActivities($id)
    {

        $visitedUrls   =$this->userActivities->getUserVisitedUrls($id);
        return         $this->userActivities->getUserActivities(1);
    }
    public function adminProfile()
    {
        return "am here";
    }
    public function setPermission($id)
    {
        return $id;
    }

    public function setUserPermission(Request $request)
    {
        //DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        return $request->all();


        foreach($request->permission as $permission)
        {
          $data= \DB::table('permission_user')
                ->insert(
                    [
                        'permission_id'=>$permission,
                        'user_type'=>$request->user_type,
                        'user_id'=>8
                        //'user_id'=>$request->user_id
                    ]);
        }

        return \response::json($data);


        return $request->all();

    }
    public function viewPermission($id)
            {

                $userDetails            =User::where('id',$id)->first();
                $userPermission         =\DB::table('permission_user')->where('user_id',$id)->get();
                $allPermission          =\DB::table('permissions')->get();
               // $unassignedPermission   =

                return \Response::json($userPermission);
                return view('newAdmin.users.viewPermission',compact('userDetails','userPermission','unassignedPermission'));
            }
            public function editPermissions(Request $request)
            {
                foreach($request->permission as $item)
                {
                    \DB::table('permission_user')->where('id',$request->id)
                        ->update([
                        'permission_id'=>$item
                          ]);
                }
             return redirect('')->with('alert','permissions are updated');
            }
}
