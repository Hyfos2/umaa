<?php

namespace App\Http\Controllers;

use App\Sport;
use Illuminate\Http\Request;
use App\Services\StudentDetailsService;
use App\Services\UserActivitiyService;
use App\Services\SubjectService;
use App\Services\SportService;


class SecondaryController extends Controller
{

    protected $studentInfo,$userService ,$subjects,$sports;
    public  function  __construct(StudentDetailsService $studentDetailsService ,
                                  UserActivitiyService $userActivityService,
                                  SubjectService $subjectService,
                                  SportService $sportService)
    {
        $this->studentInfo  =$studentDetailsService;
        $this->userService  =$userActivityService;
        $this->subjects  =$subjectService;
        $this->sports  =$sportService;
    }

    public function index()
    {

    }


    public function create()
    {
        //
    }
    public function students()
    {
        $schoolLevel  =$this->studentInfo->getSchoolLevel("Secondary")->id;
        $type         =$this->userService->getType("Student")->id;
       $zimsecsubjects     =$this->subjects->secondaryZimecSubjects();
        $cambridgesubjects     =$this->subjects->secondaryCambridgeSubjects();
        $levels       =$this->studentInfo->getSecondaryLevels();
        $sports       =$this->sports->showSports();
       // return $sports;
        return view('newAdmin.secondary.students',compact('zimsecsubjects','cambridgesubjects','levels','schoolLevel','type','sports'));
    }
    public function teachers()
    {

        $schoolLevel        =$this->studentInfo->getSchoolLevel("Secondary")->id;
        $type               =$this->userService->getType("Teacher")->id;
        $zimsecsubjects     =$this->subjects->secondaryZimecSubjects();
        $cambridgesubjects     =$this->subjects->secondaryCambridgeSubjects();
        $levels       =$this->studentInfo->getSecondaryLevels();
        return view('newAdmin.secondary.teachers.teacher',compact('zimsecsubjects','cambridgesubjects','levels','schoolLevel','type'));
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
