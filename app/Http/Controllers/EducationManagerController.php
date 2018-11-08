<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class EducationManagerController extends Controller
{
   public function dashboard()
   {
   	 return view('education.dashboard');
   }

   public function schoolTeachers()
   {

   	$data =User::all();
   return view('education.teachers',compact('data'));
   	
   }
   public function teacherClass()
   {
   	return view('education.teachers.tcherClasses');
   	
   }

   public function teacherInfo()
   {
   	return view('education.teachers.classInfo');
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
   		return view('education.subjects.index');
   }
}
