<?php

namespace App\Http\Controllers;

use App\Services\StudentDetailsService;
use App\Services\SubjectService;
use App\Services\UserActivitiyService;
use Illuminate\Http\Request;

class PrimaryController extends Controller
{
    protected $studentInfo,$userService ,$primarySubjects;
    public  function  __construct(StudentDetailsService $studentDetailsService ,UserActivitiyService $userActivityService, SubjectService $subjectService)
    {
        $this->studentInfo  =$studentDetailsService;
        $this->userService  =$userActivityService;
        $this->primarySubjects  =$subjectService;
    }
    public function index()
    {

    }

    public function primaryStudent()
    {
       $data         =$this->studentInfo->getPrimaryLevels();
       $sports       =$this->studentInfo->getSports();
       $schoolLevel  =$this->studentInfo->getSchoolLevel("Primary");
       $type         =$this->userService->getType("Student")->id;
       return view('newAdmin.primary.index',compact('data','sports','schoolLevel','type'));
    }
    public function primaryTeacher()
    {
       $data         =$this->studentInfo->getPrimaryLevels();
       $schoolLevel  =$this->studentInfo->getSchoolLevel("Primary");
       $type         =$this->userService->getType("Teacher")->id;
       return view('newAdmin.primary.teacher',compact('data','schoolLevel','type'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
