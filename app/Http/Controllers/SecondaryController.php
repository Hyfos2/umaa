<?php

namespace App\Http\Controllers;

use App\Sport;
use App\AssignedSubject;
use Illuminate\Http\Request;
use App\Services\StudentDetailsService;
use App\Services\UserActivitiyService;
use App\Services\SubjectService;
use App\Services\SportService;
use App\Services\TeacherService;

class SecondaryController extends Controller
{

    protected $studentInfo,$userService ,$subjects,$sports,$teacher;
    public  function  __construct(StudentDetailsService $studentDetailsService ,
                                  UserActivitiyService $userActivityService,
                                  SubjectService $subjectService,
                                  SportService $sportService,
                                  TeacherService $teacherService)
    {
        $this->studentInfo  =$studentDetailsService;
        $this->userService  =$userActivityService;
        $this->subjects  =$subjectService;
        $this->sports  =$sportService;
        $this->teacher  =$teacherService;
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
        return view('newAdmin.secondary.students.students',compact('zimsecsubjects','cambridgesubjects','levels','schoolLevel','type','sports'));
    }

    protected function  getAssignedSubjects()
    {
            return AssignedSubject::orderBy('id','asc')->get();
    } 
    public function teachers()
    {

        $schoolLevel        =$this->studentInfo->getSchoolLevel("Secondary")->id;
        $type               =$this->userService->getType("Teacher")->id;
        $zimsecsubjects     =$this->subjects->secondaryZimecSubjects();
        $cambridgesubjects  =$this->subjects->secondaryCambridgeSubjects(); 
        $levels             =$this->studentInfo->getSecondaryLevels();


        //return $this->subjects->unassignedSubjects();
        return view('newAdmin.secondary.teachers.teacher',compact('zimsecsubjects','cambridgesubjects','levels','schoolLevel','type'));
    }
   
    public function teacherProfile($id)
    {
        $teacherClasses         =$this->teacher->teacherProfile($id);
        $teacherAttendance      =$this->teacher->teacherAttendance($id);
        $dailyExercises         =$this->teacher->dailyExercises($id);
        $dailyRecordedExercise  =$this->teacher->recordedDailyExercise($id);
        return $dailyRecordedExercise;
    }
}
