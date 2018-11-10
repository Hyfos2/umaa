<?php

namespace App\Http\Controllers;
use App\User;
use App\Subject;
use App\Level;
use App\userTypes;
use App\SchoolLevel;
use App\ExaminationBoard;
use App\teacher;
use App\teacherWork;

use Illuminate\Http\Request;

class EducationManagerController extends Controller
{
   public function dashboard()
   {
   	 return view('education.dashboard');
   }

   public function schoolTeachers()
   {

   
       $schoolLevel  =SchoolLevel::where('name','Secondary')->first();
        $subjects      = Subject::with('board')->where('schoolLevel',$schoolLevel->id)->orderBy('name','asc')->get();

        $zimsec  =[];
        $cambridge  =[];
        
        foreach($subjects  as $item)
        {
            if($item->board->name =="Zimsec")
                array_push($zimsec,$item);
            if($item->board->name =="Cambridge")
                array_push($cambridge,$item);
        }
        $classes   = Level::all();
        $userType  = userTypes::where('name','Teacher')->first(['id']);
        $userTypeId =$userType->id;
          $level  =Level::all();

          $formOneTrs   =$this->teachersPerLevel(1);
          $formTwoTrs   =$this->teachersPerLevel(2);
          $formThreeTrs  =$this->teachersPerLevel(3);
          $formFourTrs   =$this->teachersPerLevel(4);
          $formFiveTrs   =$this->teachersPerLevel(5);
          $formSixTrs   =$this->teachersPerLevel(5);

         // return $formOneTrs;
   return view('education.teachers',compact('zimsec','cambridge','classes','userTypeId','level','formOneTrs','formTwoTrs','formThreeTrs','formFourTrs','formFiveTrs','formSixTrs'));
   	
   }

   public function teachersPerLevel($id)
   {
         return teacher::with('user')->where('levelId',$id)->get();  
   }
   public function teacherClass($id)
   {
      $subjects  =teacherWork::with('subject')->where('teacherId',$id)->get();
      //return $subjects;
   	return view('education.teachers.tcherClasses',compact('subjects','id'));
   }

   public function teacherInfo($id)
   {
         //$teacherWorkDetails = 
   	return view('education.teachers.classInfo',compact('id'));
   }

   public function schoolStudents()
   {
   	 $data  =User::all();
   return view('education.students',compact('data'));
   }

   public function studentClass()
   {
   	 return view('education.students.studentsClassProfile');
   }

   public function studentSubPerformance()
   {
   	 return view('education.students.subjectPerformanceDetails');
   	
   }
   public function getStudents()
   {
   	return User::all();
   }
   public function studentAttendanceDetails()
   {
   		return view('education.students.studentAttendance');
   }
   public function schoolSubjects()
   {
         $board   =ExaminationBoard::all();
         $level  =Level::all();
         $subjects = Subject::with('board','level')->where('schoolLevel',2)->orderBy('name')->get();

   		return view('education.subjects.index',compact('board','level','subjects'));
   }
}
