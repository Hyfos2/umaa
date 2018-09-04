<?php

namespace App\Http\Controllers;

use App\Services\UserActivitiyService;
use Illuminate\Http\Request;
use App\userTypes;
use Illuminate\Support\Facades\Validator;
use App\Rules\LevelErrors;

class UsersController extends Controller
{

    protected $userActivities;
    public  function __construct(UserActivitiyService $userActivityService)
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

    public function store(Request $request)
    {

    }
    public function userLogs()
    {
        return $this->userActivities->userLogs();
    }

    public function show($id)
    {
        return "users";
    }

    public function edit($id)
    {
    }

    
    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {

    }
}
