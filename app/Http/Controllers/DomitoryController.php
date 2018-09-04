<?php

namespace App\Http\Controllers;

use App\activityLog;
use App\domitoryDetail;
use App\Services\DomitoryService;
use App\Services\UserActivitiyService;
use App\studentAccommodationDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DomitoryController extends Controller
{

    protected  $userActivity, $domitoryService;

    public function __construct(UserActivitiyService $userActivity ,DomitoryService  $domitoryService)
    {
       $this->userActivity  =$userActivity;
       $this->domitoryService =$domitoryService;
    }

    public function index()
    {
        //
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->domitoryService->newHostel($request);
        $this->userActivity->userActivities("created a new hostel");
       return "created";
    }


    public function show($id)
    {

    }
    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
        //
    }
    public function allocateRooms(Request $request)
    {
        $this->domitoryService->allocateRoomsToStudents($request);
        return "saved";
    }


}
