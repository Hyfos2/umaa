<?php

namespace App\Http\Controllers;

use App\cleanerRegister;
use App\cleaningRoaster;
use App\workingArea;
use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
   
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
        //to implement validation

        Staff::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'gender'=>$request->gender,
            'cellphone'=>$request->cellphone,
            'dob'=>$request->dob,
            'positionId'=>$request->position
        ]);
        return "staff created";
    }

 
    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
    }

    public function staffRegister(Request $request)
    {
        foreach($request->register as $val)
        {
            cleanerRegister::create([
                'staffId'=>$val->staff,
                'date'=>$val->date,
                'present'=>$val->present,
                'absent'=>$val->absent,
                'comment'=>$val->comment,
                'reason'=>$val->reason
            ]);
        }
        return "register signed";
    }

    public function getCleanersRegister()
    {
        return cleanerRegister::with('staff')->orderBy('date','asc')->get();
    }
    public function createRoaster(Request $request)
    {
        cleaningRoaster::create(
            [
                'staffId'=>$request->staff,
                'day'=>$request->day,
                'areaOfWork'=>$request->workarea
            ]
        );
        return " roaster created";
    }
    public  function getRoaster()
    {
        return cleaningRoaster::with('staff','workarea')->get();
    }

    public function createWorkingArea(Request $request)
    {
        workingArea::create([
            'name'=>$request->name
        ]);
        return "working area created";
    }

}
