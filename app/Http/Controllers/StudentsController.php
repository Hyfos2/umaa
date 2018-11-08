<?php

namespace App\Http\Controllers;

use App\Services\StudentService;
use App\studentAttendance;
use App\SubjectMark;
use Illuminate\Http\Request;
use App\Student;
use App\StudentSubject;
use App\Services\StudentsPerSubject;
use Illuminate\Support\Facades\Crypt;


class StudentsController extends Controller
{
    protected  $allStudent;
    protected $students;
    public  function  __construct(StudentsPerSubject $allStudent ,StudentService $studentService)
    {
        $this->allStudent  = $allStudent;
        $this->students  =$studentService;
    }
    public function male($id,$sub)
    {
        $data =[];
        foreach($this->allStudent->allStudents($id,$sub)  as $item)
        {
            if($item->gender =="male" || $item->gender =="Male"|| $item->gender =="MALE")
            {
                array_push($data,$item);
            }
        }

    	return view('students.males',compact('data','id'));
    }
    public function female($id,$sub)
    {
        $data =[];
        foreach($this->allStudent->allStudents($id,$sub)  as $item)
        {
            if($item->gender =="female" || $item->gender =="Female"|| $item->gender =="FEMALE")
            {
                array_push($data,$item);
            }
        }
        return view('students.males',compact('data','id' ));
    }
    public function girls($id)
    {
        $students   = Student::with('user','level','sublevel')->where('levelId',$id)->where('edited',0)->get();
        $girls =[];
        foreach($students as $item)
        {
            if($item->user->gender =="female" || $item->user->gender =="Female"  || $item->user->gender =="FEMALE")
            {
                array_push($girls,$item);
            }
        }
    	return view('students.females',compact('girls'));
    }
    public function report($studId)
    {
        //$user   = Student::with('user','subjectmark','subject','level')->where('userId',$studId)->get();

        $student  =\DB::table('students')
            ->join('users','students.userId','=','users.id')
            ->join('levels','students.levelId','=','levels.id')
            ->where('students.userId','=',\Auth::user()->id)
            ->first(['users.name',
                'users.surname',
                'users.email',
                'levels.name as levelName',
                'users.gender',
                'students.parentName',
                'students.parentEmail',
                'students.id']);


        $marksRecords = \DB::table('subject_marks')
            ->join('subjects','subject_marks.subjectId','=','subjects.id')
            ->where('subject_marks.studentId','=',$student->id)
            ->get();

        $studentSports  =  \DB::table('student_sports')
            ->join('sports','student_sports.sportId','=','sports.id')
            ->where('student_sports.studentId','=',$student->id)
            ->get();

        $totalMark          =$this->getStudentTotalMarks($marksRecords);
        $subjectTotalMarks  =$this->subjectTotalMarks($marksRecords);

        return view('students.report',compact('student','marksRecords','studentSports','totalMark','subjectTotalMarks'));

    }
    public function newMarks($id,$sub)
    {
        $userDetails  =  \App\User::where('id',$id)->first(['name','surname','email']);
        $subName      =\App\Subject::find($sub)->name;
        return view('students.marks',compact('userDetails','sub','subName'));
    }
    public function recordNewMarks(Request $request)
    {
       // return $request->all();
        $user             =\App\User::where('email',$request->email)->first(['id','gender']);
        $studentData      =Student::where('userId',$user->id)->first();
      // return   $user;
        //$studentSubject   =\App\StudentSubject::where('studentId',$user->id)->where('subjectId',$studentData->id)->update(['edited'=>1]);

        switch ($request->mark)
        {
            case $request->mark<=39:
                $recordMark   =new SubjectMark();
                $recordMark->subjectId  =$request->sub;
                $recordMark->studentId  =$studentData->id;
                $recordMark->comment  =$request->comment;
                $recordMark->mark     =$request->mark;
                $recordMark->grade     ="U";
                $recordMark->save();
                break;

                case $request->mark<=44:
                $recordMark   =new SubjectMark();
                $recordMark->subjectId  =$request->sub;
                $recordMark->studentId  =$studentData->id;
                $recordMark->comment  =$request->comment;
                $recordMark->mark     =$request->mark;
                $recordMark->grade     ="E";
                $recordMark->save();
                break;

                case $request->mark<=49:
                $recordMark   =new SubjectMark();
                $recordMark->subjectId  =$request->sub;
                $recordMark->studentId  =$studentData->id;
                $recordMark->comment  =$request->comment;
                $recordMark->mark     =$request->mark;
                $recordMark->grade     ="D";
                $recordMark->save();
                break;

                case $request->mark<=59:
                $recordMark   =new SubjectMark();
                $recordMark->subjectId  =$request->sub;
                $recordMark->studentId  =$studentData->id;
                $recordMark->comment  =$request->comment;
                $recordMark->mark     =$request->mark;
                $recordMark->grade     ="C";
                $recordMark->save();
                break;

                case $request->mark<=65:
                $recordMark   =new SubjectMark();
                $recordMark->subjectId  =$request->sub;
                $recordMark->studentId  =$studentData->id;
                $recordMark->comment  =$request->comment;
                $recordMark->mark     =$request->mark;
                $recordMark->grade     ="B";
                $recordMark->save();
                break;
            default:
                $recordMark   =new SubjectMark();
                $recordMark->subjectId  =$request->sub;
                $recordMark->studentId  =$studentData->id;
                $recordMark->comment  =$request->comment;
                $recordMark->mark     =$request->mark;
                $recordMark->grade     ="A ";
                $recordMark->save();
        }

        $stdntSub         =StudentSubject::where('studentId',$studentData->id)
                                        ->where('subjectId',$request->sub)
                                        ->update(['edited'=>1]);

        if($user->gender  === "male" || $user->gender  === "MALE" ||$user->gender  === "Male" )
        {
            return \Redirect::to('maleStudents/'.$studentData->levelId.'/'.$request->sub)->with('message', 'Marks recorded successfully');
        }
        if($user->gender  === "female" || $user->gender  === "FEMALE" ||$user->gender  === "Female" )
        {
            return \Redirect::to('femaleStudents/'.$studentData->levelId.'/'.$request->sub)->with('message', 'Marks recorded successfully');

        }

    }
    public function  results()
    {
        $student  =\DB::table('students')
                  ->join('users','students.userId','=','users.id')
                  ->join('levels','students.levelId','=','levels.id')
                  ->where('students.userId','=',\Auth::user()->id)
                  ->first(['users.name',
                           'users.surname',
                           'users.email',
                            'levels.name as levelName',
                            'users.gender',
                            'students.parentName',
                           'students.parentEmail',
                           'students.id']);

        $studentSubject   = StudentSubject::where('studentId',$student->id)->count();

        $marksRecords = \DB::table('subject_marks')
                             ->join('subjects','subject_marks.subjectId','=','subjects.id')
                             ->where('subject_marks.studentId','=',$student->id)
                             ->get();

        $studentSports  =  \DB::table('student_sports')
                        ->join('sports','student_sports.sportId','=','sports.id')
                        ->where('student_sports.studentId','=',$student->id)
                        ->get();

         $totalMark          =$this->getStudentTotalMarks($marksRecords);
         $subjectTotalMarks  =$this->subjectTotalMarks($marksRecords);

//                if(count($marksRecords) != $studentSubject)
//                {
//                    return view('students.noResults');
//                }
        return view('students.results',compact('student','marksRecords','studentSports','totalMark','subjectTotalMarks'));
    }
    public  function getStudentTotalMarks($marksRecords)
    {
        $totalMark  =0;
        foreach($marksRecords as $item)
        {
            $totalMark += $item->mark;
        }
        return $totalMark;
    }
    public  function subjectTotalMarks($marksRecords)
    {
         return count($marksRecords)*100;
    }
    public  function stdntprof($id)
    {
        //return redirect()->back()->with('alert', 'Coming Soon..');
        $student  =\DB::table('students')
            ->join('users','students.userId','=','users.id')
            ->join('levels','students.levelId','=','levels.id')
            ->join('entry_types','students.modeOfEntry','=','entry_types.id')
            ->join('sub_levels','students.subLevelId','=','sub_levels.id')
            ->where('students.userId','=',$id)
            ->first(['users.name',
                'users.surname',
                'users.email',
                'levels.name as levelName',
                'users.gender',
                'students.parentName',
                'students.parentEmail',
                'students.id as studentId',
                'students.allergies',
                'students.dob',
                'students.regNumber',
                'entry_types.name as moe',
                'sub_levels.name as subLevel']);


        $studentSubjects=$this->allStudent->studentSubjects($student->studentId);

        $studentSports  =\DB::table('student_sports')
            ->join('sports','student_sports.sportId','=','sports.id')
            ->where('student_sports.studentId','=',$student->studentId)
            ->get();

         $studentAttendance =$this->allStudent->studentAttendances($student->studentId);

        $studentAccommodationDetails =\DB::table('student_accommodation_details')
            ->join('domitory_details','student_accommodation_details.hostelName','=','domitory_details.id')
            ->where('student_accommodation_details.studentId','=',$student->studentId)
            ->get();

        $studentAwards =\DB::table('student_awards')
            ->where('student_awards.studentId','=',$student->studentId)
            ->get();


        $studentTransactions =$this->allStudent->studentTransaction($student->studentId);
        $studentAccounts     =$this->allStudent->studentAccount($student->studentId);

        $blackBookDetails =\DB::table('black_books')
            ->where('black_books.studentId','=',$student->studentId)
            ->get();

        $libraryInfo =\DB::table('borrowed_books')
            ->join('library_details','borrowed_books.bookDetails','=','library_details.id')
            ->where('borrowed_books.studentId','=',$student->studentId)
            ->get();

        $studentDailyExcercise  =$this->allStudent->studentDailyExercise($student->studentId);

        //return \Response::json($student)  ." " .\Response::json($studentSubjects)   ." " . \Response::json($studentSports);

    }
    public function formOneStudents()
    {
      return  $this->students->getFormOneStudents();
    }
    public function formTwoStudents()
    {
      return  $this->students->getFormTwoStudents();
    }
    public function formThreeStudents()
    {
      return  $this->students->getFormThreeStudents();
    }
    public function formFourStudents()
    {
      return  $this->students->getFormFourStudents();
    }
    public function studentRegister($id)
    {
        $stdntid = Crypt::decrypt($id);
        $att   =studentAttendance::where('studentId',$stdntid)->get();
        $pageName  ='Register';
        $studentID  =$stdntid;
        return view('internal.student.register',compact('att','pageName','studentID'));

    }
    public function studentendOfTerm($id)
    {
        $stdntid = Crypt::decrypt($id);
        $att     =SubjectMark::where('studentId',$stdntid)->get();
        $pageName  ='End-of-Term';
        $studentID  =$stdntid;
        return view('internal.student.endOfTerm',compact('att','pageName','studentID'));
    }
}
