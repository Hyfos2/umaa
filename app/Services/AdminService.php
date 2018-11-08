<?php
namespace App\Services;
use App\Permission;
use App\userTypes;
use App\User;

class AdminService
{
    public function newUserType($request)
    {
        return userTypes::create(
            [
                'name'=>$request->name
            ]
        );
    }
    public function setPermission($request)
    {
        return PermissionUser::create(
            [
                'name'=>$request->name
            ]
        );
    }

    public function getAdmin()
    {
         return User::where('userTypeId',1)->get();
    }public function getAccountants()
    {
         return User::where('userTypeId',4)->get();
    }
    public function getEducationMngr()
    {
          return User::where('userTypeId',5)->get(); 
    } 
    public function getCommunicator()
    {
        return  User::where('userTypeId',6)->get();
    }


}