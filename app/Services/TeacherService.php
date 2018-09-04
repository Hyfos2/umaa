<?php
/**
 * Created by PhpStorm.
 * User: Hyfos2
 * Date: 8/20/2018
 * Time: 11:55 AM
 */

namespace App\Services;


use App\DailyExercise;
use App\Level;
use App\studentDailyExerciseMark;
use App\Subject;
use App\teacher;
use App\teacherWork;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class TeacherService
{

    protected $schoolLevel;
    protected  $primarySubjects;
    static public function loggedInUserId()
    {
        return 7;
    }
    public function  __construct(SubjectService $subjectService,
                                  StudentDetailsService $studentDetailsService)
    {
        $this->primarySubjects  =$subjectService;
        $this->schoolLevel  =$studentDetailsService;
    }
    public function recordDailyExercises($request)
    {
       foreach($request->exercise  as $val)
       {
           $teacher  =teacher::where('userId',\Auth::user()->id)->first();

           studentDailyExerciseMark::create([
               'studentId'=>$request->student,
               'teacherId'=>$teacher->id,
               'topic'=>$request->topic,
               'comment'=>$request->comment,
               'total'=>$request->total,
               'mark'=>$request->mark,
               'date'=>$request->date
           ]);

       }
       return studentDailyExerciseMark::all();
    }
    public function newTeacher($request,$user)
    {
        $teacher               =new teacher();
        $teacher->userId       =$user->id;
        $teacher->schoolLevel  =$request->schoolLevel;
        $teacher->dob          =date('Y-m-d',strtotime($request->dob));
        $teacher->save();
        return $teacher;
    }
    public function teacherWork($request,$teacher)
    {

            foreach ($this->primarySubjects->primarySubjects() as $subject)
            {
                $teacherwork = new teacherWork();
                $teacherwork->teacherId = $teacher->id;
                $teacherwork->levelId = $request->level;
                $teacherwork->subLevelId = $request->sublevel;
                $teacherwork->subjectId = $subject->id;
                $teacherwork->save();
            }
        }
    public function teacherZimsecSubjects($request,$teacher)
    {
        if(!empty($request->zimsec)) {
            foreach ($request->zimsec as $subject) {
                $teacherwork = new teacherWork();
                $teacherwork->teacherId = $teacher->id;
                $teacherwork->levelId = $request->level;
                $teacherwork->subLevelId = $request->sublevel;
                $teacherwork->subjectId = $subject;
                $teacherwork->save();
            }
        }
    }
    public function teacherCambridgeSubjects($request,$teacher)
    {
        if(!empty($request->cambridge))
        {
            foreach($request->cambridge as $subject)
            {
                $teacherwork               =new teacherWork();
                $teacherwork->teacherId    =$teacher->id;
                $teacherwork->levelId      =$request->level;
                $teacherwork->subLevelId   =$request->sublevel;
                $teacherwork->subjectId    =$subject;
                $teacherwork->save();
            }
        }

    }
    public function getAllPrimaryTeachers()
    {
       $teacher  = teacher::with('user')
            ->where('schoolLevel',$this->schoolLevel->getSchoolLevel("Primary")->id)
            ->get();

        return \Response::json($teacher);

    }
    public function secondaryTeachers()
    {
        $teacher  = teacher::with('user')
            ->where('schoolLevel',$this->schoolLevel->getSchoolLevel("Secondary")->id)
            ->get();

        return \Response::json($teacher);
    }
    static  public function  getLoggedInTeacherSubjects()
    {
        $teacher  = teacher::where('userId',self::loggedInUserId())->first(['id']);
        return $teacher->id;

//      return  \DB::table('teacher_works')
//            ->join('subjects','teacher_works.subjectId','=','subjects.id')
//            ->join('levels','teacher_works.levelId','=','levels.id')
//            ->select(\DB::raw("
//             subjects.name as subname,
//             levels.name as levelname
//            "))
//            ->where('teacher_works.teacherId','=',$teacher->id)
//            ->get();
       // return teacherWork::with('subject','level')
         //   ->where('teacherId',$teacher->id)
           // ->get();
    }
    public function  getStudentsPerclass($levelId,$subId)
    {
        return \DB::table('students')
            ->join('users','students.userId','=','users.id')
            ->join('levels','students.levelId','=','levels.id')
            ->join('sub_levels','students.subLevelId','=','sub_levels.id')
            ->join('student_subjects','student_subjects.studentId','=', 'students.id')
            ->join('subjects','subjects.id','=','student_subjects.subjectId')
            ->where('students.levelId',$levelId)
            ->where('student_subjects.subjectId',$subId)
            ->select(\DB::raw("
                         users.name   as username,
                         users.surname   as surname,
                         users.email  as useremail,
                         subjects.name as subname,
                         levels.name as levname,
                         users.gender,
                         students.address,
                         subjects.id as subjectId,
                         students.userId as userId,
                         students.id as studentId
                         "))

//
//            ->where('student_subjects.edited',0)
            ->get();
    }
    public function  getFormNamePerCurrentTeacher($levelId)
    {
        return Level::find($levelId)->name;
    }
    public function  getSubjectDetails($subId)
    {
        return Subject::where('id',$subId)->first(['name','id']);
    }
    public function  studentRegister($request)
    {

    }
    public function  totalMalesPerClass($levelId,$subId)
    {
        $boys  =[];



        foreach($this->getStudentsPerclass($levelId,$subId) as $val)
        {
            if($val->gender =="male" ||$val->gender =="Male" || $val->gender =="MALE")
            {
                array_push($boys,$val);
            }
        }
        return sizeOf($boys);
    }
    public function  totalFemalesPerClass($levelId,$subId)
    {
        $girls =[];
        foreach($this->getStudentsPerclass($levelId,$subId) as $val)
        {
            if($val->gender =="female" || $val->gender =="Female"|| $val->gender =="FEMALE")
            {
                array_push($girls,$val);
            }
        }

        return sizeOf($girls);
    }
    public function  dailyExerciseTopic($request)
    {
        $newExercise    = new DailyExercise();
        $newExercise->subjectId  =$request->subjectId;
        $newExercise->levelId     =$request->levelId;
        $newExercise->topic       =ucfirst($request->topic);
        $newExercise->total       =$request->total;
        $newExercise->date        =Carbon::today()->format('Y-m-d');
        $newExercise->teacherId    =$this->getLoggedInTeacherSubjects();
        $newExercise->save();
        return $newExercise;
    }
    public  function recordExercise($request)
    {

        $newStudentExercise             =new studentDailyExerciseMark();
        $newStudentExercise->studentId  =$request->studentId;
        $newStudentExercise->dailyExerciseId   ='1';
        $newStudentExercise->mark              =$request->mark;
        $newStudentExercise->comment           =$request->comment;
        $newStudentExercise->save();
        return $newStudentExercise;
    }

    public  function  decryptFormValue($levelId)
    {
        return Crypt::decrypt($levelId);
    }
    public  function  decryptSubjectInformation($subId)
    {
        return Crypt::decrypt($subId);
    }


}