<?php


namespace App\Services;

use App\Level;
use App\SchoolLevel;
use App\Sport;
use App\PrimaryLevel;
use App\StudentSport;
use App\StudentSubject;
use App\Student;
use App\User;
use App\ParentStudent;
use Carbon\Carbon;


class StudentDetailsService
{
    public function getSports()
    {
        return Sport::orderBy('name','asc')->get();
    }
    public function getPrimaryLevels()
    {
        return   PrimaryLevel::orderBy('id','asc')->get();
    }
    public function getSecondaryLevels()
    {
        return   Level::orderBy('id','asc')->get();
    }
    public function getSchoolLevel($name)
    {
        if(ucfirst($name) == "Primary")
            return SchoolLevel::where('name',$name)->first(['id']);
        if(ucfirst($name) == "Secondary")
            return SchoolLevel::where('name',$name)->first(['id']);
    }
    public function randomFourDigit()
    {
        $number = "0123456789";
        $pass = array();
        $alphaLength = strlen($number) - 1;
        for ($i = 0; $i < 5; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $number[$n];
        }
        return implode($pass);
    }
    public function newStudent($request,$user)
    {
        $student              =new Student();
        $student->userId      =$user->id;
        $student->levelId     =$request->level;
        $student->allergies   =$request->allergy?:'nothing';
        $student->dob         =date('Y-m-d',strtotime($request->dob));
        $student->schoolLevel =$request->schoolLevel;
        $student->regNumber   ="R".Carbon::now()->format('y').$this->randomFourDigit().strtoupper($user->name[0].$user->surname[0]);
        $student->subLevelId  =$request->sublevel;
        $student->parentName  =ucwords($request->parentname);
        $student->parentEmail =$request->parentemail;
        $student->modeOfEntry =$request->moe?:2;
        $student->parentPhone =$request->cellphone;
        $student->address     =ucwords($request->address);
        $student->save();
        return $student;
    }
    public function userParent($request)
    {
        $pass        =$this->generateRandomString();
        $parentName  =explode(' ',$request->parentname);
        return User::create([
            'name' => ucfirst($parentName[0]),
            'email' => $request['parentemail'],
            'surname'=>ucfirst($parentName[1]),
            'userTypeId'=>$request['userTypeId'],
            'gender'=>ucfirst($request['gender']),
            'userName'=>$pass,
            'imgUrl'=>'image/path',
            'password' =>bcrypt($pass),
        ]);
    }
    public function generateRandomString()
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 5; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
    public function newParent($parent,$student,$request)
    {
       return ParentStudent::create(
            [
                'userId'=>$parent->id,
                'studentId'=>$student->id,
                'address'=>$request->address,
                'cellphone'=>$request->cellphone,
            ]
        );
    }
    public function newStudentZimsecSubjects($student,$request)
    {
        foreach($request->zimsec as $item)
        {
            StudentSubject::create([
                'studentId'=>$student->id,
                'subjectId'=>$item,
                'edited'=>0
            ]);
        }
    }
    public function newStudentCambridgeSubjects($student,$request)
    {
        foreach($request->cambridge as $item)
        {
            StudentSubject::create([
                'studentId'=>$student->id,
                'subjectId'=>$item,
                'edited'=>0
            ]);
        }

    }
    public function newStudentSports($student,$request)
    {
        foreach($request->sports as $item)
        {
            StudentSport::create([
                'studentId'=>$student->id,
                'sportId'=>$item
            ]);
        }

    }
    public function getLoggedInStudentSubjects()
    {
        $student  =Student::where('userId',\Auth::user()->id)->first(['id']);
        return \DB::table('student_subjects')
            ->join('subjects','student_subjects.subjectId','=','subjects.id')
            ->join('levels','student_subjects.levelId','=','levels.id')
            ->select(\DB::raw("
             subjects.name as subname,
             levels.name as levelname
            "))
            ->where('student_subjects.teacherId','=',$student->id)
            ->get();
    }
}