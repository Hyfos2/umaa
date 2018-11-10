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
use App\TimeTable;

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

      $monday  =[];
      $tue  =[];
      $wed  =[];
      $thur =[];
      $fri =[];

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
                            ->where('teacherId','=',$id)
                            ->get();

                           
       // $attendance  =studentAttendance::where('teacherId',$teacherDetails->teacherId)->get();

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
     
      //return $subjects;
   	return view('education.teachers.tcherClasses',compact('subjects','id','mondayData','tuesdayData','wednesdayData','thursdayData','fridayData'));
   }

   public function teacherInfo($id)
   {
         //$teacherWorkDetails = 
   	return view('education.teachers.classInfo',compact('id'));
   }

   public function schoolStudents()
   {
   	 $data  =$this->allUsers();
   return view('education.students',compact('data'));
   }

   public function allUsers()
   {
     return User::all();
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
