<?php

namespace App\Http\Controllers;

use App\Services\TeacherService;
use App\Services\UserActivitiyService;
use App\Student;
use App\teacherWork;
use App\TimeTable;
use App\studentAttendance;
use App\teacher;
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
        $mark   =0;
        $comment   =0;
        return view('internal.teacher.dailyExercise',compact('levelId','subId','formName','subjectDetails','students','mark','comment'));
    }
    public function endOfTerm($levelId,$subId)
    {
        $levelId    =$this->teacherService->decryptFormValue($levelId);
        $subId      =$this->teacherService->decryptSubjectInformation($subId);
        $students  =$this->teacherService->getStudentsPerclass($levelId,$subId);
        $formName  =$this->teacherService->getFormNamePerCurrentTeacher($levelId);
        $girls     =$this->teacherService->totalFemalesPerClass($levelId,$subId);
        $boys      =$this->teacherService->totalMalesPerClass($levelId,$subId);
        $subjectDetails =$this->teacherService->getSubjectDetails($subId);
        return view('internal.teacher.endOfTerm',compact('levelId','subId','formName','subjectDetails','students','girls','boys'));
    }
    public function primaryTeachers()
    {
        return $this->teacherService->getAllPrimaryTeachers();
    }
    public function teacherProfile($id)
    {

        $teacherDetails  =\DB::table('teachers')
            ->join('users','teachers.userId','=','users.id')
            ->where('teachers.userId','=',$id)
            ->first(['users.name','users.surname','users.email', 'users.id','teachers.id as teacherId']);

        $teacherWork  =\DB::table('teacher_works')
            ->join('subjects','subjects.id','=','teacher_works.subjectId')
            ->join('levels','levels.id','=','teacher_works.levelId')
            ->join('sub_levels','teacher_works.subLevelId','=','sub_levels.id')
            ->join('examination_boards','examination_boards.id','=','subjects.examinationBoard')
            ->select(\DB::raw(
                "subjects.name  as subName,
                        subjects.subjectCode,
                        levels.name as levelName,
                        sub_levels.name as subLevelName,
                        examination_boards.name as board"
            ))
            ->where('teacherId','=',$teacherDetails->teacherId)
            ->get();

        // $teacherTimeTables =TimeTable::where('teacherId',$teacherDetails->teacherId)->with('level','sublevel','subject')->get();

        $teacherTimeTables  =\DB::table('time_tables')
                            ->join('subjects','subjects.id','=','time_tables.subjectId')
                            ->join('levels','levels.id','=','time_tables.levelId')
                            ->join('sub_levels','time_tables.subLevelId','=','sub_levels.id')
                            ->select(\DB::raw(
                                         "subjects.name  as subName,
                                        levels.name as levelName,
                                        sub_levels.name as subLevelName,
                                        time_tables.day,
                                        time_tables.startTime,
                                        time_tables.endTime,
                                        time_tables.color"
                    
                            ))
                            ->where('teacherId','=',$teacherDetails->teacherId)
                            ->get();

                           
        $attendance  =studentAttendance::where('teacherId',$teacherDetails->teacherId)->get();

        //return\Response::json( $teacherWork);
        //$teacherWork    =teacherWork::with('teacher')->where('teacherId',$id)->get();

        $mondayData  =[];
        $tuesdayData  =[];
        $wednesdayData  =[];
        $thursdayData  =[];
        $fridayData  =[];
    
        foreach($teacherTimeTables as $item)
        {
            if($item->day ==='Monday')
            {
                    array_push($mondayData,$item);
            }
            if($item->day ==='Tuesday')
            {
                    array_push($tuesdayData,$item);
            }if($item->day ==='Wednesday')
            {
                    array_push($wednesdayData,$item);
            }if($item->day ==='Thursday')
            {
                    array_push($thursdayData,$item);
            }if($item->day ==='Friday')
            {
                    array_push($fridayData,$item);
            }
        }

        $mondayData  =json_encode($mondayData);
        $tuesdayData  =json_encode($tuesdayData);
        $wednesdayData  =json_encode($wednesdayData);
        $thursdayData  =json_encode($thursdayData);
        $fridayData  =json_encode($fridayData);

       return view('newAdmin.secondary.teachers.teacherProfile',compact('teacherDetails','teacherWork','teacherTimeTables','mondayData','tuesdayData','wednesdayData','thursdayData','fridayData'));
    }
    public function formOneTeachers()
    {
        return $this->teacherService->fromOneTeachers();
    }
    public function formTwoTeachers()
    {
        return $this->teacherService->fromTwoTeachers();
    }
    public function formThreeTeachers()
    {
        return $this->teacherService->fromThreeTeachers();
    }
    public function formFourTeachers()
    {
        return $this->teacherService->fromFourTeachers();
    }
    public function getClass($levelId,$subId)
    {
        $levelId   =$this->teacherService->decryptFormValue($levelId);
        $subId     =$this->teacherService->decryptSubjectInformation($subId);
        $students  =$this->teacherService->getStudentsPerclass($levelId,$subId);
        $formName  =$this->teacherService->getFormNamePerCurrentTeacher($levelId);
        $girls     =$this->teacherService->totalFemalesPerClass($levelId,$subId);
        $boys      =$this->teacherService->totalMalesPerClass($levelId,$subId);
        $subjectDetails =$this->teacherService->getSubjectDetails($subId);
        return view('internal.teacher.register',compact('students','levelId','subId','formName','girls','boys','subjectDetails'));
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
    public function classRegister(Request $request)
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
        return redirect()->back()->with('alert','Record was saved');
    }
    public function recordExercise(Request $request)
    {

       // return $request->all();
        $this->teacherService->recordExercise($request);
        return redirect()->back()->with('alert','Record was saved');
    }
}