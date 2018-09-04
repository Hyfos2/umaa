<?php

namespace App\Http\Controllers;

use App\Services\TeacherService;
use App\Services\UserActivitiyService;
use App\Student;
use Illuminate\Http\Request;
use App\Level;

class TeachersController extends Controller
{
    protected $teacherService;
    protected  $userActivityService;
    public  function __construct(TeacherService $teacherService,UserActivitiyService $userActivityService)
    {
        $this->teacherService =$teacherService;
        $this->userActivityService =$userActivityService;
    }
    public function index()
    {
        return view('internal.index');

    }
    public function registerView()
    {
        return view('internal.teacher.register');
    }
    public function dailyExercises($levelId,$subId)
    {
        $levelId    =$this->teacherService->decryptFormValue($levelId);
        $subId      =$this->teacherService->decryptSubjectInformation($subId);
        $students  =$this->teacherService->getStudentsPerclass($levelId,$subId);
        $formName  =$this->teacherService->getFormNamePerCurrentTeacher($levelId);
        $girls     =$this->teacherService->totalFemalesPerClass($levelId,$subId);
        $boys      =$this->teacherService->totalMalesPerClass($levelId,$subId);
        $subjectDetails =$this->teacherService->getSubjectDetails($subId);
        return view('internal.teacher.dailyExercise',compact('levelId','subId','formName','subjectDetails','students'));
    }
    public function endOfTerm($levelId,$subId)
    {
        $levelId    =$this->teacherService->decryptFormValue($levelId);
        $subId      =$this->teacherService->decryptSubjectInformation($subId);
        $students  =$this->teacherService->getStudentsPerclass($levelId,$subId);
        $formName  =$this->teacherService->getFormNamePerCurrentTeacher($levelId);
        $girls     =$this->teacherService->totalFemalesPerClass($levelId,$subId);
        $boys      =$this->teacherService->totalMalesPerClass($levelId,$subId);
        return view('internal.teacher.endOfTerm',compact('levelId','subId','formName'));
    }
    public function primaryTeachers()
    {
        return $this->teacherService->getAllPrimaryTeachers();
    }
    public function secondaryTeachers()
    {
        return $this->teacherService->secondaryTeachers();
    }
    public function getClass($levelId,$subId)
    {
        $levelId    =$this->teacherService->decryptFormValue($levelId);
        $subId      =$this->teacherService->decryptSubjectInformation($subId);
        $students  =$this->teacherService->getStudentsPerclass($levelId,$subId);
        $formName  =$this->teacherService->getFormNamePerCurrentTeacher($levelId);
        $girls     =$this->teacherService->totalFemalesPerClass($levelId,$subId);
        $boys      =$this->teacherService->totalMalesPerClass($levelId,$subId);
        return view('internal.teacher.register',compact('students','levelId','subId','formName','girls','boys'));
    }
    public function teacherProf($id)
    {
       return redirect()->back()->with('alert', 'Coming Soon..');
        $teacherDetails  =\DB::table('teachers')
                    ->join('users','teachers.userId','=','users.id')
                    ->where('teachers.userId','=',$id)
                    ->first(['users.name','users.surname','users.email', 'users.id','teachers.id as teacherId']);

        //return \Response::json($teacherDetails);

        $teacherWork  =\DB::table('teacher_works')
                    ->join('subjects','subjects.id','=','teacher_works.subjectId')
                    ->join('levels','levels.id','=','teacher_works.levelId')
                    ->join('sub_levels','teacher_works.subLevelId','=','sub_levels.id')
                    ->join('examination_boards','examination_boards.id','=','subjects.examinationBoard')
                    ->select(\DB::raw(
                        "subjects.name  as subName,
                        subjects.subjectCode,
                        levels.name as levelName,
                        examination_boards.name as board"
                    ))
                    ->where('teacherId','=',$teacherDetails->teacherId)
                    ->get();

        return\Response::json( $teacherWork);
    }
    public function signRegister(Request $request)
    {
        return $request->all();
        $this->teacherService->studentRegister($request);
    }
    public function recordDailyPerformance(Request $request)
    {
        $this->teacherService->recordDailyExercises($request);
        $this->userActivityService->userActivities("recorded marks for".$request->topic);
        return "marks were recorded";
    }
    public function dailyExerciseTopic(Request $request)
    {
       $this->teacherService->dailyExerciseTopic($request);
       return "saved";
    }
    public function recordExercise(Request $request)
    {
        return $request->all();
        $this->teacherService->recordExercise($request);
        return "record was saved";
    }
}